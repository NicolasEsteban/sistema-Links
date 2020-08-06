@extends('layouts.appIndex')

@section('contenido')

<h1 class="h3 mb-2 text-gray-800">Tabla de usuarios</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Lista de usuarios almacenados</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                <tr>
                  <th>Nombre de usuario</th>
                  <th>Nombre del usuario registrado</th>
                  <th>Tipo de usuario</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              
              <tbody>
                 @foreach ($users as $usu)
                  <tr>
                    <td>{{$usu->name}}</td>
                    <td>{{$usu->username}}</td>
                    <td>{{$usu->tipo}}</td>
                    <td> <a  href="/ver/{{ $usu -> id}}" class="btn btn-primary" ><i class="fa fa-eye"></i> </a>
                         <a href="{{URL::action('UserController@edit', $usu -> id)}}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                         <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                  </tr>
                  @include('admin.modal')
                  @endforeach
              </tbody>
          </table>
          {{ $users->links() }}
        </div>
    </div>
</div>        

@endsection