<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fecha' => $this->fecha,
            'descripcion' => $this->descripcion,
            'proveedor_id' => $this->proveedor_id, 
            //RELACION
            'proveedor' => $this->proveedor,       
        ];
    }
}
