<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
        	'nombre'=> 'required|min:3|max:50',
            'descripcion'=> 'required|numeric|min:1|max:4',
            'categoria_id'=> 'required',
            
        ];
    }
     public function attributes()
    {
        return [
            'nombre'=> 'nombre',
            'direccion'=> 'direccion',
            'categoria_id'=> 'categoria',
            
        ];
}
    public function messages()
    {
         return [
            'nombre.required'=> 'el :atribute es requerido',
            'nombre.min' => 'el :atribute debe tener minimo 3 caracteres y maximo 50 caracteres'

            'descripcion.required' => 'la :atribute es requerido',
            'descripcion.numeric' => 'la :atribute debe ser numerico',
            'descripcion.min' => 'la :atribute debe tener minimo un caracter y maximo 4',

            'categoria_id.required' => 'el :atribute es requerido',
            
        ];
    }
}