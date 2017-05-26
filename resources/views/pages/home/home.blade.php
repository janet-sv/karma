@extends('layouts.app')

@section('content')
  <div class="dashboard">
    <h1 class="dashboard-title">
      Dashboard
    </h1>
    <div class="dashboard-filter-container">

    </div>
    <div class="dashboard-cards-container">
      <div class="dashboard-card">
        <div class="dashboard-card-information-wrapper">
          <p class="dashboard-card-information-number">
            1,161
          </p>
          <p class="dashboard-card-information-text">
            Total de Registros
          </p>
        </div>
        <div class="dashboard-card-information-wrapper">
          <p class="dashboard-card-information-number">
            2,207
          </p>
          <p class="dashboard-card-information-text">
            Total de Visitas
          </p>
        </div>
      </div>
      <div class="dashboard-card">
        <div class="dashboard-card-information-wrapper">
          <p class="dashboard-card-information-number">
            73%
          </p>
          <p class="dashboard-card-information-text">
            Ratio de Conversión
          </p>
        </div>
        <div id="ratio-progress-bar"></div>
      </div>
      <div class="dashboard-card">
        <div class="dashboard-card-information-wrapper">
          <p class="dashboard-card-information-number">
            1,161
          </p>
          <p class="dashboard-card-information-text">
            Total de Registros
          </p>
        </div>
        <div class="dashboard-card-information-wrapper">
          <p class="dashboard-card-information-number">
            2,207
          </p>
          <p class="dashboard-card-information-text">
            Total de Visitas
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
  <script type="text/javascript">
  var ProgressBar = require("progressbar.js");
  var bar = new ProgressBar.Line('#ratio-progress-bar', {
    strokeWidth: 4,
    easing: 'easeInOut',
    duration: 1400,
    color: '#FFEA82',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: {width: '100%', height: '100%', 'border-radius'}
  });

bar.animate(1.0);
  </script>
@endsection