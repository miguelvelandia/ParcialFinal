@extends('layouts.main')
@section('titulo', 'parcial')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="background: #CDDC39">
        <div class="card">
            <div class="header"><h2>Compra</h2></div>
            <div class="body">
                <form action="{{ url('compras')}}" method="POST">
                	@csrf  
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                                </div>
                            </div>
                            {!! $errors->first('fecha', '<small class="alert alert-danger">:message</small>') !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
                                </div>
                            </div>
                            {!! $errors->first('descripcion', '<small class="alert alert-danger">:message</small>') !!}
                        </div> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Proveedor</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="proveedor_id" name="proveedor_id" class="form-control">
                                     @foreach($proveedores as $proveedor)
                                     <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }} </option>
                                     @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                    </div>          
                    <button type="submit" class="btn bg-green waves-effect">Guardar</button>
                    <a href="{{ url('compras')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop