<?php

namespace App\Http\Requests\Content;

use App\Models\Content;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class ContentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules() : array
    {
        $titleRules = [
            'string',
            'required'
        ];

        // If title is present and changed, add unique rule
        if ($this->filled('title') && $this->titleChanged()) {
            $titleRules[] = 'unique:contents,title';
        }

        return [
            'title' => $titleRules,
            'body' => 'string|without_tags',
            'resource_id' => 'required|integer|exists:resources,id',
            'category_id' => 'required|integer|exists:categories,id',
            'thumbnail' => 'image',
            'keywordsArray' => 'keyword_array|required',
        ];
    }

    /**
     * set names for the attributes
     *
     * @return array<string, string>
     */
    public function attributes() : array
    {
        return [
            'title' => 'العنوان',
            'body' => 'المحتوى',
            'resource_id' => 'المورد',
            'category_id' => 'التصنيف',
            'thumbnail' => 'الصورة المصغرة',
            'keywordsArray' => 'الكلمات الرئيسية',
        ];
    }

    /**
     * Check if the title has changed.
     *
     * @return bool
     */
    protected function titleChanged() : bool
    {
        $content = Content::findOrFail($this->route('id'));
        return $this->filled('title') && $this->input('title') !== $content->title;
    }

    /**
     * Get the validation error messages.
     *
     * @return array<string, string>
     */
    public function messages() : array
    {
        return [
            'title.string' => 'يجب أن يكون :attribute نصًا.',
            'title.unique' => 'العنوان مستخدم بالفعل، يرجى اختيار عنوان آخر.',

            'body.string' => 'يجب أن يكون :attribute نصًا.',
            'body.without_tags' => 'يجب أن يكون :attribute خاليًا من العلامات HTML.',

            'resource_id.integer' => 'يجب أن يكون :attribute رقمًا صحيحًا.',
            'resource_id.exists' => 'المورد غير موجود.',

            'category_id.integer' => 'يجب أن يكون :attribute رقمًا صحيحًا.',
            'category_id.exists' => 'الفئة غير موجودة.',

            'thumbnail.image' => 'يجب أن يكون :attribute صورة.',

            'keywordsArray.keyword_array' => 'يجب أن يكون :attribute في تنسيق JSON صالح ولا يجوز أن يكون فارغًا.',
            'keywordsArray.required' => 'حقل :attribute مطلوب.',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        toastr()->error(implode('<br>', $validator->errors()->all()));
        throw new ValidationException($validator, back()->withInput());
    }

}
