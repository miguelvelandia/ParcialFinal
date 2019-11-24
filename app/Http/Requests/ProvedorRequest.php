<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvedorRequest extends FormRequest
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
            'contacto'=>'required|min:3|max:50',
            'telefono'=> 'required|numeric|min:3|max:20',
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
            'nombre.required'=> 'el :atribute es requerido',
            'nombre.min' => 'el :atribute debe tener minimo 3 caracteres y maximo 50 caracteres'

            'direccion.required'=> 'el :atribute es requerido',

            'contacto.required'=> 'La :atribute es requerido',
            'contacto.min' => 'el :atribute debe tener minimo 3 caracteres y maximo 50 caracteres'

            'telefono.required'=> 'La :atribute es requerido',
            'telefono.numeric'=> 'La :atribute debe ser numerica',
            'telefono.min'=> 'La :atribute debe tener minimo 3 caracter y maximo 20',

             'pagina_web.required'=> 'el :atribute es requerido',
        ];
    }
}