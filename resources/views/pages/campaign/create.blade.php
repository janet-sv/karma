@extends('layouts.app')

@section('sidebar')
  <div class="fixed">
    @include('layouts.sidebar')
  </div>
@endsection

@section('content')
  <div class="content-container">
    <div class="campaign">
        <form action="{{route('campaigns.store')}}" method="POST">
        {{ csrf_field() }}
      <div class="campaign-header">
        <h1 class="campaign-title">
          Nueva Campaña
        </h1>
          <button class="campaign-button">
            Guardar
          </button>
      </div>
      <div class="campaign-form-container">
          <div class="input-group">
            <label class="input-label">Nombre:</label>
            <input type="text" class="input-text" required name="title">
          </div>
          <div class="campaign-form-input-group-wrapper has-three-groups">
            <div class="input-group">
              <label class="input-label">Puntos Otorgados:</label>
              <input type="number" class="input-text" required name="points">
            </div>
            <div class="input-group">
              <label class="input-label">Fecha Inicio:</label>
              <input type="date" class="input-text" required name="start_date">
            </div>
            <div class="input-group">
              <label class="input-label">Fecha Fin:</label>
              <input type="date" class="input-text" required name="finish_date">
            </div>
          </div>
          <div class="input-group">
            <label class="input-label">Dirección:</label>
            <input type="text" class="input-text" required name="place">
          </div>
          <div class="input-group">
            <label class="input-label">Descripción:</label>
            <textarea rows="6" class="textarea" name="description" required></textarea>
          </div>
      </div>
        </form>
    </div>
  </div>
@endsection
