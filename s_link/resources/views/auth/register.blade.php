@extends('layouts.appLogin')

@section('contenido')
<div class="col-md-12">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Registrarse</h1>
      </div>
      <form  method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input id="username" type="text" class="form-control form-control-user"  name="username" placeholder="Nombre de Usuario..." >
        </div>
        <div class="form-group">
            <input id="name" type="text" class="form-control form-control-user"  name="name"  placeholder="Nombres y Apellidos" >
        </div>

        <div class="form-group">
          <input id="photo" type="file" class="form-control form-control-user"  name="photo"  placeholder="Imagen" >
        </div>
        
        <div class="form-group">
          <input id="password" type="password" class="form-control form-control-user"  name="password" placeholder="Contraseña" >
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control form-control-user"  name="password_confirmation" placeholder="Contraseña" >
          </div>
        
        <div class="form-actions">
            <button  type="submit" class="btn btn-primary btn-user btn-block">
                Registrarse
            </button>
        </div>
        <hr>
        
      </form>
</div>
@endsection
