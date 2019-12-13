@extends('layouts.appfunc')

@section('headerappfunc')
<h1>Тemperatura</h1>
<p>Alarm System</p>
@endsection

@section('contentappfunc')
    <div class="chart" id="temperaturemonitoring1">
        <div id="temperature">
            <h1 id="textmonitoring">Sensor Temperatura.</h1>
            <canvas id="canvas-id"></canvas>
        </div>
    </div>
<script type="text/javascript" src="js/temperatureself.js"></script>
@endsection