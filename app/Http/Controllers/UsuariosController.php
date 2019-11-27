<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

 
    public function create()
    {
        
        $roles = Role::all()->pluck('name','id');
        return view('usuarios.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $usuarios = new User;
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = bcrypt($request->password);

        if ($usuarios->save()) {
            $usuarios->assignRole($request->rol);

            return redirect('/usuarios')->with('success','Usuario creado con exito');
        }

    }

    public function show($id){
       
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $roles = Role::all()->pluck('name','id');
        return view('usuarios.edit', compact('usuario','roles'));
    }


    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;

        if ($request->password != null) {
            $usuario->password = $request->password;
        }
        //borra el rol actual y asigna el nuevo
        $usuario->syncRoles($request->rol);
      //  $usuario->assignRole($request->rol);
        $usuario->save();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
       $usuario = User::find($id);
       //eliminar el rol
       $usuario->removeRole($usuario->roles->implode('name', ','));
       $usuario->delete();
       return redirect('/usuarios');
    }
}
