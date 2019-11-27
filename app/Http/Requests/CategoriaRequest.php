<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre'=> 'required|min:3|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'nombre'=> 'nombre',
        ];
    }
    public function messages()
    {
         return [
            'nombre.required'=> 'El :attribute es requerido',
            'nombre.min' => 'el :attribute debe tener minimo 3 caracteres y maximo 50',
        ];
    }
}
