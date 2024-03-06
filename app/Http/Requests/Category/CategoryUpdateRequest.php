<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class CategoryUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:categories,name',
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
            'name' => 'الاسم',
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
            'name.required' => 'حقل :attribute مطلوب.',
            'name.string' => 'يجب أن يكون :attribute نصًا.',
            'name.max' => 'يجب ألا يتجاوز حقل :attribute 255 حرفًا.',
            'name.unique' => 'الاسم مستخدم بالفعل، يرجى اختيار اسم آخر.',
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
