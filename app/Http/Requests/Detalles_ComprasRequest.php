<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Detalles_ComprasRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'compra_id'=> 'required',
            'descripcion'=> 'required',
            'cantidad'=> 'required|numeric|min:1',
            'valor_unitario'=> 'required|numeric|min:1',
        ];
    }
    public function attributes()
    {
        return [
            'compra_id'=> 'compra',
            'provedor_producto_id'=> 'producto_proveedor',
            'cantidad'=> 'cantidad',
            'valor_unitario'=> 'valor unitario',
        ];
    }
    public function messages()
    {
         return [
            'compra_id.required'=> 'el :atribute es requerido',

            'provedor_producto_id.required'=> 'el :atribute es requerido',

            'cantidad.required'=> 'La :atribute es requerido',
            'cantidad.numeric'=> 'La :atribute debe ser numerica',
            'cantidad.min'=> 'La :atribute debe tener minimo 1 caracter',

            'valor_unitario.required'=> 'La :atribute es requerido',
            'valor_unitario.numeric'=> 'La :atribute debe ser numerica',
            'valor_unitario.min'=> 'La :atribute debe tener minimo 1 caracter',
        ];
    }
}
