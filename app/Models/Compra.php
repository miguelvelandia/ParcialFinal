<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';
    protected $fillable = ['fecha', 'descripcion', 'proveedor_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function proveedor(){
    	return $this->belongsTo('App\Models\Proveedor');
    }

    public function Proveedor_productos(){
    	return $this->belongsToMany('App\Models\Proveedor_Producto')->withPivot('cantidad', 'valor_unitario');
    }
}
