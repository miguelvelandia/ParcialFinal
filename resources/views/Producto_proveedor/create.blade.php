@extends('layouts.main')
@section('titulo', 'parcial')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="background: #CDDC39">
        <div class="card">
            <div class="header"><h2>Proveedor</h2></div>
            <div class="body">
                <form action="{{ url('productos_proveedores')}}" method="POST">
                	@csrf  
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                </div>
                            </div>
                            {!! $errors->first('nombre', '<small class="alert alert-danger">:message</small>') !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                                </div>
                            </div>
                            {!! $errors->first('direccion', '<small class="alert alert-danger">:message</small>') !!}
                        </div> 
                        <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="contacto" name="contacto"  placeholder="Contacto">
                                </div>
                            </div> 
                            {!! $errors->first('contacto', '<small class="alert alert-danger">:message</small>') !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                            {!! $errors->first('telefono', '<small class="alert alert-danger">:message</small>') !!}
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="pagina_web" name="pagina_web" placeholder="Pagina Web">
                                </div>
                                {!! $errors->first('pagina_web', '<small class="alert alert-danger">:message</small>') !!}
                            </div>
                        </div>
                        <div class=""><h2>Producto</h2></div><br> 
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre Producto">
                                </div>
                            </div>
                            {!! $errors->first('nombre_producto', '<small class="alert alert-danger">:message</small>') !!}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Producto">
                                </div>
                            </div>
                            {!! $errors->first('descripcion', '<small class="alert alert-danger">:message</small>') !!}
                        </div> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Nombre Categoria</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="categoria_id" name="categoria_id" class="form-control">
                                     @foreach($categorias as $categoria)
                                     <option value="{{ $categoria->id }}">{{ $categoria->nombre }} </option>
                                     @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div> 
                    </div>          
                    <button type="submit" class="btn bg-green waves-effect">Guardar</button>
                    <a href="{{ url('productos_proveedores')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop