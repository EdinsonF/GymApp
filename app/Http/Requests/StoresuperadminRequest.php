<?php

namespace Gym\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresuperadminRequest extends FormRequest
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
            'cedula'   => 'bail|required|unique:persona',
            'nombres'  => 'bail|required',
            'telefono' => 'bail|required',
            'email'    => 'bail|required|unique:users|email',
            'password' => 'bail|required',
        ];
    }
}
