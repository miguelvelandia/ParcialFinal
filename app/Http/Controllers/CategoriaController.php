<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Resources\CategoriaResource as categoriaresource;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index(){
    	$categorias = categoriaresource::collection(Categoria::all());
    	return view('Categoria.index', compact('categorias'));
       
    }

    public function create(){
    	return view('Categoria.create');
    }

    public function store(CategoriaRequest $request)
    {
        $categorias = new Categoria;
        $categorias->nombre = $request->nombre;
        $categorias->save();

        return redirect('/categorias');   
    }

    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('Categoria.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;

        $categoria->save();

        return redirect('/categorias');
    }

    public function destroy($id)
    {
       $categoria = Categoria::find($id);
       $categoria->delete();
       return redirect('/categorias');
    }

}
