@extends('layouts.main')
@section('titulo', 'I-Profession')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #CDDC39">
        <div class="card">
            <div class="header"><h2> Crear Usuario</h2></div>
            <div class="body">
                <form action="{{ url('usuarios')}}" method="POST">
                	@csrf
                    <label for="name">Nombre</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required>
                        </div>
                    </div>
                    <label for="email">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Ingresa tu email" required>
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
                            	<option value="{{ $values}}">{{$values}}</option>
                            	@endforeach
                            </select>
                        </div>
                    </div><br>
      
                    <button type="submit" class="btn bg-green waves-effect">GUARDAR</button>
                    <a href="{{ url('usuarios')}}" class="btn bg-red waves-effect pull-right" ><i class="material-icons">close</i></a>
                </form>
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>Exito</h4>
                    {{session('success')}}.
                </div>
                @endif
            </div>
        </div>
    </div>
  </div>
</div>

@stop