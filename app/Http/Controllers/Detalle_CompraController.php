<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Detalle_CompraResource as Detalle_CompraResource;
use App\Models\Detalle_Compra;
use App\Models\Compra;
use App\Models\Proveedor_Producto;


class Detalle_CompraController extends Controller
{
    public function index(){

    	$detalle_compras = Detalle_CompraResource::collection(Detalle_Compra::all());
    	return view('detalle_compra.index', compact('detalle_compras'));
    }

     public function create(){

    	$detalle_compra = Detalle_Compra::all();
    	$compras = Compra::all();
    	//$proveedor_productos = Proveedor_productos::all();
    	return view('detalle_compra.create', compact('detalle_compra', 'compras'));
    }

}
