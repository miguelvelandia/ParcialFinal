@extends('layouts.main')
@section('titulo', 'I-Profession')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header"><h2>Actualizar Usuario</h2></div>
            <div class="body">
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                	@csrf
                    @method('PUT')
                    <label for="name">Nombre</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required value="{{ $usuario->name }}">
                        </div>
                    </div>
                    <label for="email">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Ingresa tu email" required value="{{ $usuario->email }}">
                        </div>
                    </div>
                    <label for="password">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu password">
                        </div>
                    </div>

                    <label for="rol">Rol</label>
                    <div class="form-group">
                    	<div class="form-line">
                            <select class="form-control" name="rol">
                            	@foreach ($roles as $rol => $values)
                                @if($usuario->hasRole($values))
                            	<option value="{{ $values}}" selected>{{$values}}</option>
                                @else
                                <option value="{{ $values}}">{{$values}}</option>
                                @endif
                            	@endforeach
                            </select>
                        </div>
                    </div><br>
      
                    <button type="submit" class="btn bg-orange waves-effect">Actualizar</button>
                    <a href="{{ url('usuarios')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop