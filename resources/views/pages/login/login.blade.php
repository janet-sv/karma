@extends('layouts.app')

@section('content')
  <div class="content-container-login">
    <div class="text-center">
      <div class="login-logo-wrapper">
        <img src="{{ asset('images/general/logo.png') }}" class="login-logo">
      </div>
      <h1 class="login-title">
        ¡Bienvenido!
      </h1>
      <div class="login">
        <form action="">
          <div class="login-input-group">
            <div class="login-input-wrapper">
              <span class="icon-user is-active"></span>
              <input type="text" class="login-input" placeholder="Usuario" />
            </div>
          </div>
          <div class="login-input-group">
            <div class="login-input-wrapper">
              <span class="icon-locked is-active"></span>
              <input type="text" class="login-input" placeholder="Contraseña" />
            </div>
          </div>
          <div class="login-forgot-password-wrapper">
            <a href="#" class="login-forgot-password">
              ¿Olvidaste tu contraseña?
            </a>
          </div>
          <div class="login-input-button-wrapper">
            <input type="submit" class="login-input-button" value="Aceptar" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection