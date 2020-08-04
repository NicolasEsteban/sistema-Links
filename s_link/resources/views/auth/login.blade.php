@extends('layouts.appLogin')

@section('contenido')
<div class="col-md-12">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Login</h1>
      </div>
      <form  method="POST" action="{{ route('login') }}">
       @csrf
        <div class="form-group">
          <input id="username" type="text" class="form-control form-control-user"  name="username" placeholder="Ingresar su nombre de Usuario..." >
        </div>
        <div class="form-group">
          <input id="password" type="password" class="form-control form-control-user"  name="password" placeholder="Contraseña" >
        </div>
        
        <div class="form-actions">
            <button  type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
        </div>
        <hr>
        
      </form>
      <hr>
      <div class="text-center">
        <a class="small" href="">Olvidaste la contraseña?</a>
      </div>
      <div class="text-center">
        <a class="small" href="{{ route('register') }}">Create una cuenta!</a>
    </div>
</div>
@endsection
