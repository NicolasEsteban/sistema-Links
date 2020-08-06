@extends('layouts.appIndex')

@section('contenido')
<h1 class="h3 mb-2 text-gray-800">Usuario: {{$user->id }}</h1>

<div class="card-body">
    <div class="table-responsive">
        <table class="egt table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
              <td>Nombre de usuario</td>
              <td>{{$user->username}}</td>
            </tr>
            <tr>
              <td>Nombre y apellido</td>
              <td>{{$user->name}}</td>
            </tr>
            <tr>
              <td>Tipo de usuario</td>
              <td>{{$user->tipo}}</td>
            </tr>
          </table>
    </div>
</div>
@endsection