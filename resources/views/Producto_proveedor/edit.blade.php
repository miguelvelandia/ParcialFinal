@extends('layouts.main')
@section('titulo', 'I-Profession')
@section('content')
<div class="container-fluid">
<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header"> <h2>Actualizar Producto</h2></div>
            <div class="body">
                <form action="{{ route('productos_proveedores.update', $productos_proveedores->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $productos_proveedores->nombre }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="{{ $productos_proveedores->direccion }}">
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="contacto" name="contacto"  placeholder="Contacto" value="{{ $productos_proveedores->contacto }}">
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" value="{{ $productos_proveedores->telefono }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="pagina_web" name="pagina_web" placeholder="Pagina Web" value="{{ $productos_proveedores->pagina_web }}">
                                </div>
                            </div>
                        </div>

                        @foreach($productos_proveedores->productos as $producto)
                        <input type="hidden" name="idproducto" id="idproducto" value="{{$producto->id}}">
                        <div class=""><h2>Producto</h2></div><br> 
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre Producto" value="{{ $producto->nombre_producto }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Producto" value="{{ $producto->descripcion }}">
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="categoria_id" name="categoria_id" class="form-control">
                                     <option value="{{ $producto->categoria->id }}">{{ $producto->categoria->nombre }} </option>
                                     
                                    </select>  
                                </div>
                            </div>
                        </div>  
                        @endforeach                   
                    </div>          
                    <button type="submit" class="btn bg-green waves-effect">Actualizar</button>
                    <a href="{{ url('productos_proveedores')}}" class="btn bg-red waves-effect pull-right"><i class="material-icons">close</i></a>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

@stop