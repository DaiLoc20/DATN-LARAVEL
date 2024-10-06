<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFillterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
        return [
            'name' => 'required|string|max:50|unique:fillters,name',
            'parent_id' => 'nullable|exists:fillters,id',
         ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bộ lọc không được để trống.',
            'name.string' => 'Tên bộ lọc phải là một chuỗi ký tự.',
            'name.max' => 'Tên bộ lọc không được vượt quá 50 ký tự.',
            'name.unique' => 'Tên bộ lọc này đã tồn tại.',
            'parent_id.exists' => 'Bộ lọc cha không hợp lệ.',
        ];
    }
}
