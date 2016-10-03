<?php

namespace Gym\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InicioatletaRequest extends FormRequest
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
            'cedula_atleta'   => 'bail|required|unique:persona,cedula',
            'nombres_atleta'  => 'bail|required',
            'telefono_atleta' => 'bail|required',
            'email_atleta'    => 'bail|required|unique:users,email|email',
            'password_atleta' => 'bail|required',
        ];
    }
}