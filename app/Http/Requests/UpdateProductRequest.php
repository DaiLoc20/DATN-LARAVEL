<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|string|max:150|unique:products,name',
            'price' => 'required|numeric|min:0',
            'CategoryID' => 'required|exists:category,id',
            'BrandID' => 'required|exists:brand,id',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'name.max' => 'Tên sản phẩm không được vượt quá 150 ký tự.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'price.min' => 'Giá sản phẩm không được âm.',
            'CategoryID.required' => 'Danh mục sản phẩm là bắt buộc.',
            'CategoryID.exists' => 'Danh mục sản phẩm không hợp lệ.',
            'BrandID.required' => 'Thương hiệu sản phẩm là bắt buộc.',
            'BrandID.exists' => 'Thương hiệu sản phẩm không hợp lệ.',

        ];
    }
}
