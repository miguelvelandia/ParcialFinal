<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Categoria;
use App\Http\Resources\Producto_ProveedorResource as Producto_ProveedorResource;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\ProveedorRequest;

class Producto_ProveedorController extends Controller
{
    public function index(){
    	
    	$proveedores_productos = Producto_ProveedorResource::collection(Proveedor::all());
    	return view('Producto_proveedor.index', compact('proveedores_productos'));
    }

    public function create(){

    	$categorias = Categoria::all();
    	return view('Producto_proveedor.create', compact('categorias'));
    }

    public function store(ProveedorRequest $request)
    {
        $proveedor = new Proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->contacto = $request->contacto;
        $proveedor->telefono = $request->telefono;
        $proveedor->pagina_web = $request->pagina_web;
        $proveedor->save();

        $producto = new Producto;
    
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->save(); 

        $producto->proveedores()->attach([$proveedor->id]);
       
        return redirect('/productos_proveedores');
    }

    public function edit($id)
    {
        $productos_proveedores = new Producto_ProveedorResource(Proveedor::find($id));
        return view('Producto_proveedor.edit', compact('productos_proveedores'));
    }

    public function update(Request $request, $id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores->nombre = $request->nombre;
        $proveedores->direccion = $request->direccion;
        $proveedores->contacto = $request->contacto;
        $proveedores->telefono = $request->telefono;
        $proveedores->pagina_web = $request->pagina_web;
        $proveedores->save();

        $productos = Producto::find($request->idproducto);
        $productos->nombre_producto = $request->nombre_producto;
        $productos->descripcion = $request->descripcion;
        $productos->categoria_id = $request->categoria_id;
        $productos->save();

        return redirect('/productos_proveedores');
    }

    public function destroy($id)
    {
       $proveedor = proveedor::find($id);
       $proveedor->delete();
       return redirect('/productos_proveedores');
    }
}
