<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor_Producto extends Model
{
    protected $table = 'proveedor_productos';
    protected $fillable = ['proveedor_id', 'producto_id'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = false;

    public function compras(){
    	return $this->belongsToMany('App\Models\Compra')->withPivot('cantidad', 'valor_unitario');
    }
}
