<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'gender' => 'required|in:0,1,2',
            'birthday' => 'nullable|date',
            'address' => 'nullable|string|max:255',
        ];
    }
    public function messages(): array
{
    return [
        'first_name.required' => 'Vui lòng nhập họ.',
        'first_name.string' => 'Họ phải là một chuỗi ký tự.',
        'first_name.max' => 'Họ không được vượt quá 255 ký tự.',

        'last_name.required' => 'Vui lòng nhập tên.',
        'last_name.string' => 'Tên phải là một chuỗi ký tự.',
        'last_name.max' => 'Tên không được vượt quá 255 ký tự.',

        'email.required' => 'Vui lòng nhập địa chỉ email.',
        'email.string' => 'Email phải là một chuỗi ký tự.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'email.max' => 'Email không được vượt quá 255 ký tự.',
        'email.unique' => 'Email này đã được sử dụng.',

        'password.required' => 'Vui lòng nhập mật khẩu.',
        'password.string' => 'Mật khẩu phải là một chuỗi ký tự.',
        'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        'password.confirmed' => 'Xác nhận mật khẩu không khớp.',

        'phone.string' => 'Số điện thoại phải là một chuỗi ký tự.',
        'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',

        'gender.required' => 'Vui lòng chọn giới tính.',
        'gender.in' => 'Giới tính không hợp lệ.',

        'birthday.date' => 'Ngày sinh không hợp lệ.',

        'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',
        'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
    ];
}
}
