<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComprasRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
     
    public function rules()
    {
        return [
            'fecha'=> 'required',
            'descripcion'=> 'required|numeric|min:1|max:4',
            'proveedor_id'=> 'required',
        ];
    }

    public function attributes()
    {
        return [
            'fecha'=> 'fecha',
            'descripcion'=> 'descripcion',
            'proveedor_id'=> 'proveedor',
        ];
    }
    public function messages()
    {
         return [
            'fecha.required'=> 'el :atribute es requerido',

            'descripcion.required' => 'la :atribute es requerido',
            'descripcion.numeric' => 'la :atribute debe ser numerico',
            'descripcion.min' => 'la :atribute debe tener minimo un caracter y maximo 4',
            
            'proveedor_id.required' => 'el :atribute es requerido',
        ]; 
    }
}
