<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Proveedor;
use App\Http\Resources\CompraResource as CompraResource;
use App\Http\Requests\ComprasRequest;

class CompraController extends Controller
{
    public function index(){

    	$compras = CompraResource::collection(Compra::all());
    	return view('compras.index', compact('compras'));
    }

    public function create(){

    	$compra = Compra::all();
    	$proveedores = Proveedor::all();
    	return view('compras.create', compact('compra', 'proveedores'));
    }

    public function store(ComprasRequest $request)
    {
        $compra = new Compra;
        $compra->fecha = $request->fecha;
        $compra->descripcion = $request->descripcion;
        $compra->proveedor_id = $request->proveedor_id;
        $compra->save();
       
        return redirect('/compras');
    }

    public function destroy($id)
    {
       $compra = Compra::find($id);
       $compra->delete();
       return redirect('/compras');
    }

}
