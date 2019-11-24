<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre'];
    protected $hidden = ['created_at', 'updated_at'];

    public function productos(){
    	return $this->hasMany('App\Models\Producto');
    }
      
}
