@extends('layouts.appIndex')

@section('contenido')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Editar datos usuario: {{$user->id}}</h6>
    </div>
    <div class="card-body">
     
      <form  method="POST" action="/users/{{$user->id }}">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Nombre de usuario: </label>
            <div class="col-sm-8">
                <input id="username" type="text" class="form-control form-control-user"  name="username" placeholder="" value="{{$user->username}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre completo: </label>
            <div class="col-sm-8">
                <input id="name" type="text" class="form-control form-control-user"  name="name" placeholder="" value="{{$user->name}}" >
            </div>
        </div>

        <div class="form-group row">
            <label for="tipo" class="col-sm-2 col-form-label">Tipo de usuario: </label>
            <div class="col-sm-8">
                <select id="tipo" name="tipo" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Contraseña: </label>
            <div class="col-sm-8">
                <input id="password" type="password" class="form-control form-control-user"  name="password" placeholder="" value="" required>
            </div>
        </div>

        <div class="form-actions col-sm-10">
            <button  type="submit" class="btn btn-primary btn-user btn-block">
                Actualizar
            </button>
            <a href="/users" class="btn btn-secondary btn-block ">Cancelar</a>
        </div>
      </form>
    </div>
</div>
@endsection