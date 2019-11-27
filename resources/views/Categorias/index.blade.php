@extends('layouts.main')
@section('titulo', 'PARCIAL FINAL')
@section('content')
<div class="container">
  <a href="{{ url('/categorias/create') }}" class="btn bg-purple waves-effect"><i class="material-icons">add_box</i></a><br><br>
  <div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="container-fluid">
          <!-- Basic Examples -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header"><h2>Listado De Test</h2></div>
                      <div class="body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nombre Categoria</th>
                                        <th style="width: 150px">ACCIONES</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   
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

