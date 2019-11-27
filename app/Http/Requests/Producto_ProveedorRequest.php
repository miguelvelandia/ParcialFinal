<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Producto_ProveedorRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre'=> 'required|min:4',
            'direccion'=> 'required|min:4',
            'contacto'=> 'required',
            'telefono' => 'required|numeric',
            'pagina_web' => 'required|min:4'
            'nombre_producto' => 'required|min:3'
            'descripcion' = 'required|min:1|max:3',
        ];
    }
}
