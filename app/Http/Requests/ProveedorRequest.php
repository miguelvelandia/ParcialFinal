<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

   public function rules()
    {
        return [
            'nombre'=> 'required|min:3|max:50',
            'direccion'=> 'required',
            'contacto'=>'required|min:3|max:250',
            'telefono'=> 'required|numeric|min:1',
            'pagina_web'=> 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre'=> 'nombre',
            'direccion'=> 'direccion',
            'contacto'=> 'contacto',
            'telefono'=> 'telefono',
            'pagina_web'=> 'pagina web',
        ];
    }

    public function messages()
    {
         return [
            'nombre.required'=> 'el :attribute es requerido',
            'nombre.min' => 'el :attribute debe tener minimo 3 caracteres y maximo 50 caracteres',

            'direccion.required'=> 'el :attribute es requerido',

            'contacto.required'=> 'La :attribute es requerido',

            'telefono.required'=> 'La :attribute es requerido',
            'telefono.numeric'=> 'La :attribute debe ser numerica',
            'telefono.min'=> 'La :attribute debe tener minimo 1 caracter',

            'pagina_web.required'=> 'el :attribute es requerido',
        ];
    }
}
