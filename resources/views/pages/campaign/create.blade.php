@extends('layouts.app')

@section('sidebar')
  <div class="fixed">
    @include('layouts.sidebar')
  </div>
@endsection

@section('content')
  <div class="content-container">
    <div class="campaign">
      <div class="campaign-header">
        <h1 class="campaign-title">
          Nueva Campaña
        </h1>
          <button class="campaign-button">
            Guardar
          </button>
      </div>
      <div class="campaign-form-container">
        <form>
          <div class="campaign-form-input-group-wrapper has-three-groups">
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
          <div class="campaign-form-input-group-wrapper has-three-groups">
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
