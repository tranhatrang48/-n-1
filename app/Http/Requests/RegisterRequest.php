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
            'name'=>'required',
            'phone'=>'required|min:9|max:11',
            'email'=> 'required|email|max:255',
            'address'=>'required',
            'password'=>'required|min:5',
            're_password'=>'required|same:password'
        ];
    }
    
    public function messages()
    {
        return [
        'name.required'=>'Vui lòng nhập tên',
        'phone.required'=>'Vui lòng nhập số điện thoại',
        'phone.min'=>'Số điện thoại từ 9 chữ số',
        'phone.max'=>'Số điện thoại không quá 11 chữ số',
        'email.required' => 'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng',
        'address.required'=>'Vui lòng nhập địa chỉ',
        'password.required' => 'Vui lòng nhập password',
        'password.min' => 'Password quá ngắn',
        're_password.required'=>'Vui lòng nhập lại mật khẩu',
        're_password.same'=>'Mật khẩu không giống nhau'
        ];
    }
}
