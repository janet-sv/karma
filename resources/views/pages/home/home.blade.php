@extends('layouts.app')

@section('sidebar')
  <div class="fixed">
    @include('layouts.sidebar')
  </div>
@endsection

@section('content')
  <div class="content-container">
    <div class="dashboard">
      <h1 class="dashboard-title">
        Dashboard
      </h1>
      <div class="dashboard-filter-container">

      </div>
      <div class="dashboard-cards-container">
        <div class="dashboard-card">
          <div class="dashboard-card-wrapper-helper">
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
        <div class="dashboard-card">
          <div class="dashboard-card-wrapper-helper">
            <div class="dashboard-card-information-wrapper">
              <p class="dashboard-card-information-number">
                73%
              </p>
              <p class="dashboard-card-information-text">
                Ratio de Conversión
              </p>
            </div>
            <div id="ratio-progress-bar" class="dashboard-card-information-progressbar"></div>
          </div>
        </div>
        <div class="dashboard-card">
          <div class="dashboard-card-wrapper-helper">
            <div id="circle-bar" class="dashboard-card-information-progresscircle">
              <p class="dashboard-card-information-number">
                24%
              </p>
            </div>
            <div class="dashboard-card-information-wrapper">
              <p class="dashboard-card-information-text">
                Avance de meta
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="dashboard-cards-container">
        <div class="dashboard-card-linear-chart-container">
          <p class="dashboard-card-information-text">
            Histórico de Registros
          </p>
          <canvas class="dashboard-card-liner-chart" id="linear-chart" width="400" height="250"></canvas>
        </div>
        <div class="dashboard-card">
          <div class="dashboard-card-wrapper-helper">
            <div class="dashboard-card-information-wrapper">
              <p class="dashboard-card-information-text">
                Edades
              </p>
              <div class="dashboard-card-donut-chart-wrapper">
                <canvas class="dashboard-card-donut-chart" id="donut-chart" width="90" height="90"></canvas>
              </div>
              <div class="dashboard-card-chart-legend-container">
                <span class="is-pink">&#9899</span>
                <span class="dashboard-card-chart-legend">18-22</span>
                <span class="is-blue">&#9899</span>
                <span class="dashboard-card-chart-legend">23-27</span>
                <span class="is-green">&#9899</span>
                <span class="dashboard-card-chart-legend">28+</span>
              </div>
              <p class="dashboard-card-information-text">
                Top Districts
              </p>
              <ol class="dashboard-card-numeric-list">
                <li>Jesús María</li>
                <li>Magdalena</li>
                <li>Surco</li>
                <li>Pueblo Libre</li>
              </ol>
              <p class="dashboard-card-information-text">
                People
              </p>
              <div id="gender-progress-bar" class="dashboard-card-information-progressbar"></div>
              <div class="dashboard-card-chart-legend-container">
                <span class="is-blue">&#9899</span>
                <span class="dashboard-card-chart-legend">Hombres</span>
                <span class="is-green">&#9899</span>
                <span class="dashboard-card-chart-legend">Mujeres</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
  <script type="text/javascript">
    var ProgressBar = require("progressbar.js");
    var Chart = require("chart.js");

    var bar = new ProgressBar.Line('#ratio-progress-bar', {
      strokeWidth: 4,
      easing: 'bounce',
      duration: 1400,
      color: '#ff6d8a',
      trailColor: '#d8d8d8',
      trailWidth: 4,
      svgStyle: {width: '100%', height: '100%', 'border-radius': '20px'}
    });
    bar.animate(0.73);

    var circle = new ProgressBar.Circle('#circle-bar', {
      strokeWidth: 7,
      easing: 'bounce',
      duration: 1400,
      color: '#ff6d8a',
      trailColor: '#d8d8d8',
      trailWidth: 7,
      svgStyle: null
    });
    circle.animate(0.24);

    var linearChart = document.getElementById("linear-chart");
    var horizontalTags = ["May", "Jun", "Jul", "Ago", "Set", "Oct"];
    var datasets = [
      {
        label: "Campaña 1",
        backgroundColor: '#ff6d8a',
        borderColor: '#ff6d8a',
        borderWidth: 4,
        pointBackgroundColor: '#ffffff',
        pointBorderWidth: 4,
        data: [256, 345, 231, 123, 243, 156],
        fill: false,
      },
    ];
    var config = {
      type: 'line',
      data: {
        labels: horizontalTags,
        datasets: datasets,
      },
      options: {
        responsive: true,
        title: {
          display: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
      },
    };

    var linearChartGraphic = new Chart(linearChart, config);

    var donutChart = document.getElementById("donut-chart");
    var configAges = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    12,
                    45,
                    9
                ],
                backgroundColor: [
                    '#ff6d8a',
                    '#5d7aff',
                    '#64e283'
                ],
                borderWidth: [ 0, 0, 0]
            }],
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
        }
    };
    var donutChartGraphic = new Chart(donutChart, configAges);

    var barGender = new ProgressBar.Line('#gender-progress-bar', {
      strokeWidth: 4,
      easing: 'bounce',
      duration: 1400,
      color: '#5d7aff',
      trailColor: '#64e283',
      trailWidth: 4,
      svgStyle: {width: '100%', height: '100%', 'border-radius': '20px'}
    });
    barGender.animate(0.45);
  </script>
@endsection