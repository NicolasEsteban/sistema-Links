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
                  <th>Acciones</th>
                </tr>
              </thead>
              
              <tbody>
                 @foreach ($users as $usu)
                  <tr>
                    <td>{{$usu->name}}</td>
                    <td>{{$usu->username}}</td>
                    <td> <a  href="/ver/{{ $usu -> id}}" class="btn btn-primary" ><i class="fa fa-eye"></i> </a>
                         <a href="" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                         <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          {{ $users->links() }}
        </div>
    </div>
</div>        

@endsection