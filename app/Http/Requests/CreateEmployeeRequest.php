<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
            'position' => 'required|string',
            'date' => 'required|date',
            'salary'=>'required|min:3',
            'boss'=>'required',


        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле имя должно быть заполнено',
            'name.string' => 'Поле имя должно состоять из букв',
            "name.min"=>'Минимальная длина имени 2 символа',

            'position.required' => 'Поле должность должно быть заполнено',
            "position.string"=>'Поле должность должно состоять из букв',

            'date.required'=>'Поле дата должно быть заполнено',
            'date.date'=>'Поле должно быть датой',

            "salary.min"=>'Слишком маленькая зарплата',
            'salary.required'=>'Поле зарплата должно быть заполнено',

            "boss.required"=>'Поле босса должно быть заполнено',







        ];
    }
}
