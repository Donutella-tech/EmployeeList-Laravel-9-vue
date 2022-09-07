<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPostRequest extends FormRequest
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
            'email' => 'required|email|string',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Поле email должно быть заполнено',
            "email.email"=>'Поле email должно быть в формате test@gmail.com',
            "password.required"=>'Поле пароль должно быть заполнено',





        ];
    }
}
