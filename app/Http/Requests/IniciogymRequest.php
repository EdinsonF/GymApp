<?php

namespace Gym\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IniciogymRequest extends FormRequest
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
            'nombres_gym_persona'=> 'bail|required',
            'nombre_gym'=> 'bail|required|unique:gimnasio,nombre_gimnasio',
            'direccion_gym'=> 'bail|required',
            'email_gym'=> 'bail|required|unique:users,email|email',
            'password_gym'=> 'bail|required',
            
            
        ];
    }
}
