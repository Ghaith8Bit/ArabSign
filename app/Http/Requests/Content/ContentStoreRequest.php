<?php

namespace App\Http\Requests\Content;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class ContentStoreRequest extends FormRequest
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
        return [
            'title' => 'string|required|unique:contents,title',
            'body' => 'string|required|without_tags',
            'resource_id' => 'integer|required|exists:resources,id',
            'category_id' => 'integer|required|exists:categories,id',
            'thumbnail' => 'image|required',
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
     * Get the validation error messages.
     *
     * @return array<string, string>
     */
    public function messages() : array
    {
        return [
            'title.required' => 'حقل :attribute مطلوب.',
            'title.string' => 'يجب أن يكون :attribute نصًا.',
            'title.unique' => 'العنوان مستخدم بالفعل، يرجى اختيار عنوان آخر.',

            'body.required' => 'حقل :attribute مطلوب.',
            'body.string' => 'يجب أن يكون :attribute نصًا.',
            'body.without_tags' => 'يجب أن يكون :attribute خاليًا من العلامات HTML.',

            'resource_id.required' => 'حقل :attribute مطلوب.',
            'resource_id.integer' => 'يجب أن يكون :attribute رقمًا صحيحًا.',
            'resource_id.exists' => 'المورد غير موجود.',

            'category_id.required' => 'حقل :attribute مطلوب.',
            'category_id.integer' => 'يجب أن يكون :attribute رقمًا صحيحًا.',
            'category_id.exists' => 'الفئة غير موجودة.',

            'thumbnail.required' => 'حقل :attribute مطلوب.',
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
