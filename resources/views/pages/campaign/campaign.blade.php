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
          Campañas
        </h1>
        <a href="{{ route('campaigns.create') }}" >
          <button class="campaign-button">
            Nueva Campaña
          </button>
        </a>
      </div>
      <div class="campaign-table-container">
        <table class="table campaign-table">
          <thead class="table-header">
            <tr class="table-header-row campaign-table-header-row">
              <th class="table-header-column campaign-table-header-column">Nombre</th>
              <th class="table-header-column campaign-table-header-column">Locación</th>
              <th class="table-header-column campaign-table-header-column">Inicio</th>
              <th class="table-header-column campaign-table-header-column">Fin</th>
              <th class="table-header-column campaign-table-header-column text-center">Acciones</th>
            </tr>
          </thead>
          <tbody class="table-body">
            @foreach ($campaigns as $campaign)
              <tr class="table-body-row">
                <td class="table-body-column">{{ $campaign->title }}</td>
                <td class="table-body-column">{{ $campaign->place }}</td>
                <td class="table-body-column">{{ $campaign->start_date }}</td>
                <td class="table-body-column">{{ $campaign->finish_date }}</td>
                <td class="table-body-column campaign-table-actions-container">
                  <a href="#" class="campaign-table-actions">
                    <span class="icon-pencil"></span>
                  </a>
                  <a href="#" class="campaign-table-actions">
                    <span class="icon-rubbish"></span>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
