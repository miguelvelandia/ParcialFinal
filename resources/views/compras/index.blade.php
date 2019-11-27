@extends('layouts.main')
@section('titulo', 'Bienvenidos')
@section('content')
<div class="container">
  <a href="{{ url('/compras/create') }}" class="btn bg-purple waves-effect"><i class="material-icons">add_box</i></a><br><br>
  <div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="container-fluid">
          <!-- Basic Examples -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header"><h2>Listado De Compras</h2></div>
                      <div class="body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>fecha</th>
                                        <th>descripciopn</th>
                                        <th>Detalles Proveedor</th>
                                        <th style="width: 150px">ACCIONES</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   @foreach($compras as $compra)
                                   <tr>
                                    <td>{{ $compra->id }}</td>
                                    <td>{{ $compra->fecha }}</td>
                                    <td>{{ $compra->descripcion }}</td>
                                    <td>
                                      <li>{{ $compra->proveedor->nombre }}</li>
                                      <li>{{ $compra->proveedor->direccion }}</li>
                                      <li>{{ $compra->proveedor->contacto }}</li>
                                      <li>{{ $compra->proveedor->telefono }}</li>
                                      <li>{{ $compra->proveedor->pagina_web }}</li>
                                    </td>
          
                                   
                                    <td>
                                      <a href="" class="btn bg-teal waves-effect"><i class="material-icons">border_color</i></a>

                                      <a href="{{ route('compras.destroy',['id' => $compra->id])}}" class="btn btn-danger btn-sm"><i class="material-icons">close</i></a>
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