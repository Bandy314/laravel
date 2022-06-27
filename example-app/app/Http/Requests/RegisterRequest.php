<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'f_name' => 'required',
            'l_name' => 'required',
            'login' => 'required ',
            'email' => 'required ',
            'password' => 'required ',
            'confirm_password' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'f_name.required' => 'Это поле обязательно!',
            'l_name.required' => 'Это поле обязательно!',
            'login.required' => 'Это поле обязательно!',
            'email.required' => 'Это поле обязательно!',
            'password.required' => 'Это поле обязательно!',
            'confirm_password.required' => 'Это поле обязательно!',

        ];
    }
}

