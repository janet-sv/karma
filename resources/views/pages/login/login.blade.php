@extends('layouts.app')

@section('content')
  <div class="content-container-login">
    <div class="login">
      <p class="login-title">
        Iniciar Sesión
      </p>
      <form action="">
        <div class="login-input-group">
          <label for="" class="login-input-label">Usuario</label>
          <input type="text" class="login-input" />
        </div>
        <div class="login-input-group">
          <label for="">Contraseña</label>
          <input type="text" />
        </div>
        <input type="submit" class="login-button" value="Aceptar" />
      </form>
    </div>
  </div>
@endsection