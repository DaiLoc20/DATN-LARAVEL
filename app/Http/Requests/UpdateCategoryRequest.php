<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateCategoryRequest extends FormRequest
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
    public function rules():array
    {
        return [
            'name' => 'required|string|max:50|unique:categories,name',
            'parent_id' => 'nullable|exists:categories,id',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên loại sản phẩm là bắt buộc.',
            'name.max' => 'Tên loại sản phẩm không được vượt quá 50 ký tự.',
            'name.unique' => 'Tên loại sản phẩm đã tồn tại.',
            'name.string' => 'Tên  loại sản phẩm phải là một chuỗi.',
            'parent_id.exists' => 'Loại sản phẩm parent không tồn tại.',
        ];
    }
}
