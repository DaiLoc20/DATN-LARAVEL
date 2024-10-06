<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFillterRequest extends FormRequest
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
            'name' => 'required|string|max:150|unique:fillters,name',
            'parent_id' => 'nullable|exists:fillters,id',
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bộ lọc là bắt buộc.',
            'name.max' => 'Tên bộ lọc không được vượt quá 150 ký tự.',
            'name.unique' => 'Tên bộ lọc đã tồn tại.',
            'name.string' => 'Tên bộ lọc phải là một chuỗi.',
            'parent_id.exists' => 'Bộ lọc parent không tồn tại.',
        ];
    }
}
