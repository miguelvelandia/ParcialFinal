@extends('layouts.main')
@section('titulo', 'I-Profession')
@section('content')
<div class="container">


  <a href="{{ url('/usuarios/create') }}" class="btn bg-purple waves-effect"><i class="material-icons">add_box</i></a><br><br>


  <div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="container-fluid">
          <!-- Basic Examples -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header"><h2>Listado De Usuarios</h2></div>
                      <div class="body">
                          <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>NOMBRE</th>
                                          <th>EMAIL</th>
                                          <th>ROL</th>
                                          <th style="width: 150px">ACCIONES</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   @foreach($usuarios as $user)
                                   <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles->implode('name', ',') }}</td>
                                    <td>
                                      @role('moderador')
                                      <a href="{{ url('/usuarios/'.$user->id.'/edit') }}" class="btn bg-teal waves-effect"><i class="material-icons">border_color</i></a>
                                      @endrole
                                      @role('editor')
                                      <a href="{{ route('usuarios.destroy',['id' => $user->id])}}" class="btn btn-danger btn-sm"><i class="material-icons">close</i></a>
                                      @endrole 
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