<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            //user => $this->nombre de la relacion
        ];
    }
}
