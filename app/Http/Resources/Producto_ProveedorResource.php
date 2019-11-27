<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Producto_ProveedorResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'contacto' => $this->contacto,
            'telefono' => $this->telefono,
            'pagina_web' => $this->pagina_web,
            //RELACION
            'producto' => $this->productos,
        ];
    }
}
