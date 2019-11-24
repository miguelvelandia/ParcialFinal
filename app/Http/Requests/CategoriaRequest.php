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
            'nombre.required'=> 'el :atribute es requerido',
            'nombre.min' => 'el :atribute debe tener minimo 3 caracteres y maximo 50',
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
