<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImageRequest extends FormRequest
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
        return [
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CategoryID' => 'required_without_all:BrandID,UserID,ProductID|exists:categories,id',
            'BrandID' => 'required_without_all:CategoryID,UserID,ProductID|exists:brands,id',
            'UserID' => 'required_without_all:CategoryID,BrandID,ProductID|exists:users,id',
            'ProductID' => 'required_without_all:BrandID,UserID,CategoryID|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'path.required' => 'Vui lòng chọn một hình ảnh.',
            'path.image' => 'File phải là một hình ảnh.',
            'path.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, hoặc gif.',
            'path.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'CategoryID.required_without_all' => 'Phải chọn một trong CategoryID, BrandID, UserID, hoặc ProductID.',
            'BrandID.required_without_all' => 'Phải chọn một trong CategoryID, BrandID, UserID, hoặc ProductID.',
            'UserID.required_without_all' => 'Phải chọn một trong CategoryID, BrandID, UserID, hoặc ProductID.',
            'ProductID.required_without_all' => 'Phải chọn một trong CategoryID, BrandID, UserID, hoặc ProductID.',
            'CategoryID.exists' => 'CategoryID không hợp lệ.',
            'BrandID.exists' => 'BrandID không hợp lệ.',
            'UserID.exists' => 'UserID không hợp lệ.',
            'ProductID.exists' => 'ProductID không hợp lệ.',
        ];
    }
}
