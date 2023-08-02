@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <canvas id="densityChart" width="600" height="400"></canvas>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')
<script>
var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Density of Planets (kg/m3)',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638]
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: {
    labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
    datasets: [densityData]
  }
});
</script>
@stop