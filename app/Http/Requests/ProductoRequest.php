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

            'nombre_producto'=> 'required|min:3|max:50',
            'descripcion'=> 'required|numeric|min:1|max:4',
            
        ];
    }

    public function attributes()
    {
        return [
            'nombre_producto'=> 'Nombre producto',
            'descripcion'=> 'descripcion',
        ];
    }
    public function messages()
    {
         return [
            'nombre_producto.required'=> 'el :attribute es requerido',
            'nombre_producto.min'=> 'el :attributes debe tener minimo 3 caracteres',
            'descripcion.required' => 'la :attribute es requerido',
            'descripcion.numeric' => 'la :attribute debe ser numerico',
            'descripcion.min' => 'la :attribute debe tener minimo un caracter y maximo 4',
        ]; 
    }

    
}
