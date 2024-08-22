<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandsRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ 'name' => 'required|string|max:50|unique:brands,name',  ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên hãng sản xuất bắc buộc',
            'name.string' => 'Tên hãng sản xuất phải là một chuỗi ký tự.',
            'name.max' => 'Tên hãng sản xuất không được vượt quá 50 ký tự.',
            'name.unique' => 'Tên hãng sản xuất đã tồn tại.',
        ];
    }
}
