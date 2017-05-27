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
          Campañas
        </h1>
        <a href="{{ route('campaings.create') }}" >
          <button class="campaing-button">
            Nueva Campaña
          </button>
        </a>
      </div>
      <div class="campaing-table-container">
        <table class="table campaing-table">
          <thead class="table-header">
            <tr class="table-header-row campaing-table-header-row">
              <th class="table-header-column campaing-table-header-column">Nombre</th>
              <th class="table-header-column campaing-table-header-column">Locación</th>
              <th class="table-header-column campaing-table-header-column">Inicio</th>
              <th class="table-header-column campaing-table-header-column">Fin</th>
              <th class="table-header-column campaing-table-header-column text-center">Acciones</th>
            </tr>
          </thead>
          <tbody class="table-body">
            <tr class="table-body-row">
              <td class="table-body-column">Colecta Miraflores</td>
              <td class="table-body-column">Miraflores, Lima</td>
              <td class="table-body-column">08/06/2017</td>
              <td class="table-body-column">08/06/2017</td>
              <td class="table-body-column campaing-table-actions-container">
                <a href="#" class="campaing-table-actions">
                  <span class="icon-pencil"></span>
                </a>
                <a href="#" class="campaing-table-actions">
                  <span class="icon-rubbish"></span>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
