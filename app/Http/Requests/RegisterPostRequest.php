<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegisterPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed|min:5|max:30'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле имя должно быть заполнено',
            "name.min"=>'Минимальная длина имени 2 символа',
            'email.required' => 'Поле email должно быть заполнено',
            "email.email"=>'Поле email должно быть в формате test@gmail.com',
            "email.unique"=>'Пользователь с такой почтой уже зарегистрирован',
            "password.required"=>'Поле пароль должно быть заполнено',
            "password.confirmed"=>'Пароли должны совпадать',
            "password.min"=>'Минимальная длина пароля 5 символов',
            "password.max"=>"Максимальная длина пароля 30 символов",




        ];
    }
}
