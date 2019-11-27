@extends('layouts.main')
@section('titulo', 'Parcial')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #CDDC39">
        <div class="card">
            <div class="header"><h2> Crear Categoria</h2></div>
            <div class="body">
                <form action="{{ url('categorias')}}" method="POST" class="shadow rounded">
                	@csrf
                    <label for="nombre">Nombre Categoria</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre de la categoria">
                        </div>
                        {!! $errors->first('nombre', '<small class="alert alert-danger">:message</small>') !!}           
                    </div>
                    
                    <button type="submit" class="btn bg-green waves-effect">GUARDAR</button>
                    <a href="{{ url('categorias')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop