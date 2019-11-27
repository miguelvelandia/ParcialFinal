@extends('layouts.main')
@section('titulo', 'I-Profession')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header"> <h2>Actualizar Categoria</h2></div>
            <div class="body">
                <form action="{{ route('categorias.update', $categorias->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nombre_test">Nombre Categoria</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nombre" name="nombre" class="form-control" required value="{{ $categorias->nombre }}">
                        </div>
                    </div>
                    <button type="submit" class="btn bg-orange waves-effect">Actualizar</button>
                    <a href="{{ url('categorias')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop