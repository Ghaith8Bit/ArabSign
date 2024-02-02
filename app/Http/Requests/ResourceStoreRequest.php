<?php

namespace App\Http\Requests;

use App\Enums\LibraryTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class ResourceStoreRequest extends FormRequest
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
        $allowedTypes = array_map(function ($value) {
            return $value->name;
        }, LibraryTypeEnum::toArray());

        return [
            'keyword' => 'required|string|max:255',
            'pre-keyword' => 'required|string|in:Content,Learn,Blog|max:255',
            'type' => ['required', 'string', Rule::in($allowedTypes)],
            'file' => ['nullable', 'file', 'mimes:jpeg,jpg,png,svg,gif,mp4,avi'],
            'link' => ['nullable', 'url'],
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
            'keyword.required' => 'حقل :attribute مطلوب.',
            'keyword.string' => 'يجب أن يكون :attribute نصًا.',
            'keyword.max' => 'قد لا يكون :attribute أكبر من :max أحرف.',

            'pre-keyword.required' => 'حقل :attribute مطلوب.',
            'pre-keyword.string' => 'يجب أن يكون :attribute نصًا.',
            'pre-keyword.in' => 'القيمة المحددة لـ :attribute غير صالحة. القيم المسموح بها هي Content، Learn، Blog.',
            'pre-keyword.max' => 'قد لا يكون :attribute أكبر من :max أحرف.',

            'type.required' => 'حقل :attribute مطلوب.',
            'type.string' => 'يجب أن يكون :attribute نصًا.',
            'type.in' => 'القيمة المحددة لـ :attribute غير صالحة. القيم المسموح بها هي Image، GIF، Video، Facebook، Instagram، YouTube، TikTok، X.',

            'file.file' => 'حقل :attribute يجب أن يكون ملفًا.',
            'file.mimes' => 'نوع الملف المحدد لـ :attribute غير صالح. الأنواع المسموح بها هي jpeg، jpg، png، svg، gif، mp4، avi.',

            'link.url' => 'حقل :attribute يجب أن يكون رابطًا صحيحًا.',

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
        toastr()->error(implode($validator->errors()->all()));
        throw new ValidationException($validator, back()->withInput());
    }


}
