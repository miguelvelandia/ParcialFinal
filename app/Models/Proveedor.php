<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['nombre', 'direccion', 'contacto', 'telefono', 'pagina_web'];
    protected $hidden = ['created_at', 'updated_at'];

    public function productos(){
    	return $this->belongsToMany('App\Models\Producto');
    }

    public function compras(){
    	return $this->hasMany('App\Models\Compra');
    }
}
