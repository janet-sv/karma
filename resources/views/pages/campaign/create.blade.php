@extends('layouts.app')

@section('sidebar')
  <div class="fixed">
    @include('layouts.sidebar')
  </div>
@endsection

@section('content')
  <div class="content-container">
    <div class="campaing">
      <div class="campaing-header">
        <h1 class="campaing-title">
          Nueva Campaña
        </h1>
        <a href="{{ route('campaings') }}" >
          <button class="campaing-button">
            Guardar
          </button>
        </a>
      </div>
      <div class="campaing-form-container">
        <form>
          <div class="campaing-form-input-group-wrapper has-three-groups">
            <div class="input-group">
              <label class="input-label">Nombre:</label>
              <input type="text" class="input-text" name="name">
            </div>
            <div class="input-group">
              <label class="input-label">Fecha Inicio:</label>
              <input type="text" class="input-text" name="name">
            </div>
            <div class="input-group">
              <label class="input-label">Fecha Fin:</label>
              <input type="text" class="input-text" name="name">
            </div>
          </div>
          <div class="input-group">
            <label class="input-label">Dirección:</label>
            <input type="text" class="input-text" name="name">
          </div>
          <div class="campaing-form-input-group-wrapper has-three-groups">
            <div class="input-group">
              <label class="input-label">Distrito:</label>
              <input type="text" class="input-text" name="name">
            </div>
            <div class="input-group">
              <label class="input-label">Ciudad:</label>
              <input type="text" class="input-text" name="name">
            </div>
            <div class="input-group">
              <label class="input-label">Departamento:</label>
              <input type="text" class="input-text" name="name">
            </div>
          </div>
          <div class="input-group">
            <label class="input-label">Descripción:</label>
            <textarea rows="6" class="textarea" name="name"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
