@extends('layouts.appIndex')

@section('contenido')
<h1 class="h3 mb-2 text-gray-800">Usuario: {{$user->id }}</h1>

<div class="card-body">
    <div class="table-responsive">
        <table class="egt table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <tr>
            <td>Foto de perfil</td>
            <td><center><img src="{{$user->photo}}" width=264 height=auto></center></td>
          </tr>            
          <tr>
              <td>Nombre de usuario</td>
              <td><center>{{$user->username}}</center></td>
            </tr>
            <tr>
              <td>Nombre y apellido</td>
              <td><center>{{$user->name}}</center></td>
            </tr>
            <tr>
              <td>Tipo de usuario</td>
              <td><center>{{$user->tipo}}</center></td>
            </tr>
           
          </table>
    </div>
</div>
@endsection