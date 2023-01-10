<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'cp_password' => 'required|same:password',
            'user_name' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'user_name.required' => 'Vui lòng không để trống trường này',
            'email.required' => 'Vui lòng không để trống trường này',
            'email.email' => 'Địa chỉ email không hợp lệ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng nhập ít nhất 8 kí tự',
            'cp_password.required' => 'Vui lòng nhập lại mật khẩu',
            'cp_password.same' => 'Mật khẩu phải khớp với mật khẩu nhập vào'

        ];
    }
}
