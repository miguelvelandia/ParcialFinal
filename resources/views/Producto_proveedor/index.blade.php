@extends('layouts.main')
@section('titulo', 'Bienvenidos')
@section('content')
<div class="container">
  <a href="{{ url('/productos_proveedores/create') }}" class="btn bg-purple waves-effect"><i class="material-icons">add_box</i></a><br><br>
  <div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="container-fluid">
          <!-- Basic Examples -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header"><h2>Listado De Proveedores Productos</h2></div>
                      <div class="body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Contacto</th>
                                        <th>telefono</th>
                                        <th>Pagina Web</th>
                                        <th>Detalles</th>
                                        <th style="width: 150px">ACCIONES</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   @foreach($proveedores_productos as $proveedor_producto)
                                   <tr>
                                    <td>{{ $proveedor_producto->id }}</td>
                                    <td>{{ $proveedor_producto->nombre }}</td>
                                    <td>{{ $proveedor_producto->direccion }}</td>
                                    <td>{{ $proveedor_producto->contacto }}</td>
                                    <td>{{ $proveedor_producto->telefono }}</td>
                                    <td>{{ $proveedor_producto->pagina_web }}</td>
                                    <td>
                                     @foreach($proveedor_producto->productos as $producto)
                                     <li>N.Producto: {{$producto->nombre_producto}}</li>
                                     <li>Descripcion: {{$producto->descripcion}}</li>
                                     <li>Categoria: {{$producto->categoria_id}}</li>
                                     @endforeach
                                    </td>
                                    <td>
                                      <a href="{{ url('/productos_proveedores/'.$proveedor_producto->id.'/edit') }}" class="btn bg-teal waves-effect"><i class="material-icons">border_color</i></a>

                                      <a href="{{ route('productos_proveedores.destroy',['id' => $proveedor_producto->id])}}" class="btn btn-danger btn-sm"><i class="material-icons">close</i></a>
                                     </td>       
                                    </tr>
                                   @endforeach 
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
  </div>
</div>
@stop