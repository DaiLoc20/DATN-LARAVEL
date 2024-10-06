<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:products,name',
            'price' => 'required|numeric|min:0',
            'CategoryID' => 'required|exists:categories,id',
            'BrandID' => 'required|exists:brands,id',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'name.string' => 'Tên sản phẩm phải là một chuỗi ký tự.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'name.unique' => 'Tên sản phẩm đã tồn tại.',

            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là một số.',
            'price.min' => 'Giá sản phẩm không được nhỏ hơn 0.',

            'CategoryID.required' => 'Danh mục sản phẩm là bắt buộc.',
            'CategoryID.exists' => 'Danh mục sản phẩm không hợp lệ.',

            'BrandID.required' => 'Thương hiệu sản phẩm là bắt buộc.',
            'BrandID.exists' => 'Thương hiệu sản phẩm không hợp lệ.',
        ];
    }


}
