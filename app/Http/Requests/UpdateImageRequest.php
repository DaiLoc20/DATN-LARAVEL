<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImageRequest extends FormRequest
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
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CategoryID' => 'nullable|exists:categories,id',
            'BrandID' => 'nullable|exists:brands,id',
            'UserID' => 'nullable|exists:users,id',
            'ProductID' => 'nullable|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'path.image' => 'File phải là một hình ảnh.',
            'path.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, hoặc gif.',
            'path.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'CategoryID.exists' => 'CategoryID không hợp lệ.',
            'BrandID.exists' => 'BrandID không hợp lệ.',
            'UserID.exists' => 'UserID không hợp lệ.',
            'ProductID.exists' => 'ProductID không hợp lệ.',
        ];
    }
}
