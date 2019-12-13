<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta http-equiv="refresh" content="10">--}}
    <link rel="shortcut icon" href="{{ asset('img/as.ico') }}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alarm System</title>
    <!-- Styles -->

    <script src='js/jquery-3.2.1.min.js'></script>
    <script src='js/Chart.min.js'></script>
    <link href="css/appfunc.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/gauge.min.js"></script>
    <script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
    <link href="{{ asset('css/controlpanel.css') }}" rel="stylesheet">
    <link rel='stylesheet prefetch' href="{{ asset('css/font-awesome.min.css') }}">
    <link rel='stylesheet prefetch' href="{{ asset('css/working.css') }}">
    <script type="text/javascript"> jQuery(document).ready(function() {jQuery.scrollTo('#pageHr',2000);}); </script>

</head>
<body>
<div id="header">
    <div class="center" id="headerc">
        <div class="middle">
            <h1>Panel de control de Arduino</h1>
            <p>Alarm System</p>
        </div>
    </div>
</div>
<div id="pageHr">
    <i><i>↓</i></i>
    <div class="charts-wrap">
    <div class="popup">
</div>
<div id="controlpanelmain">
<img src="img/arduinopu.png" alt="Arduino Logo" />
</div>
<div id="controlpanelmain">
<div id="controlpanel">
    	<h4>Sensores de demostración </h4>
    	<div class="alert alert-success fade in">
        <strong>¡Aleatorio!</strong> Ejecute datos aleatorios en el sistema.
    	</div>
      <div class="buttons_left">
    	<form action="/startdemo">
  	    <input type="submit" class="btn btn-success" value="Ejecutar">
  	    </form>
        </div>
        <div class="buttons_right">
  	    <form action="/stopdemo">
  	    <input type="submit" class="btn btn-warning" value="Pausa">
  	    </form>
        </div>
        @if($demo_on == 1)
          <div class="area">⚠ Ejecutando</div>
        @else
          <div class="areano">⚠ Detenido</div>
        @endif
        <hr style="width: 100%">
        <h4>Sensor de temperatura</h4>
	      <div class="alert alert-info fade in">
	        <strong>Inicio del sensor de temperatura</strong>
	      </div>
        <div class="buttons_left">
	      <form action="/starttemperature">
  	    <input type="submit" class="btn btn-success" value="Ejecutar">
  	    </form>
        </div>
        <div class="buttons_right">
  	    <form action="/stoptemperature">
  	    <input type="submit" class="btn btn-warning" value="Pausa">
  	    </form>
        </div>
        @if($temperature_on == 1)
          <div class="area">⚠ Ejecutando</div>
        @else
          <div class="areano">⚠ Detenido</div>
        @endif
        <hr style="width: 100%">
	      <!-- Rounded switch -->
        <h4>Sensor CO </h4>
	      <div class="alert alert-info fade in">
	      <strong>Inicio del Sensor CO</strong>
	      </div>
        <div class="buttons_left">
	      <form action="/startco">
  	    <input type="submit" class="btn btn-success" value="Ejecutar">
  	    </form>
        </div>
        <div class="buttons_right">
  	    <form action="/stopco">
  	    <input type="submit" class="btn btn-warning" value="Pausa">
  	    </form>
        </div>
        @if($co_on == 1)
          <div class="area">⚠ Ejecutando</div>
        @else
          <div class="areano">⚠ Detenido</div>
        @endif
        <hr style="width: 100%">
	    <!-- Rounded switch -->
    <!-- Rounded switch -->
    <h4>Notificaciones </h4>
    <div class="alert alert-info fade in">
        <strong>Lanzar alertas por Email.</strong>
    </div>
    <div class="buttons_left">
        <form action="/start_email_notification">
            <input type="submit" class="btn btn-success" value="Ejecutar">
        </form>
    </div>
    <div class="buttons_right">
        <form action="/stop_email_notification">
            <input type="submit" class="btn btn-warning" value="Pausa">
        </form>
    </div>
    @if($email_notification_on == 1)
        <div class="area">⚠ Ejecutando</div>
    @else
        <div class="areano">⚠ Detenido</div>
    @endif
    <hr style="width: 100%">
    <!-- Rounded switch -->
	    <h4>Notificaciones </h4>
        <div class="alert alert-danger fade in">
            <strong>Lanzar alerta</strong>
        </div>
        <div class="buttons_left">
        <form action="/startwarning">
  	    <input type="submit" class="btn btn-success" value="Ejecutar">
  	    </form>
        </div>
        <div class="buttons_right">
  	    <form action="/stopwarning">
  	    <input type="submit" class="btn btn-warning" value="Pausa">
  	    </form>
        </div>
        <hr style="width: 100%">
        @if($warning_on == 1)
          <div class="area">⚠ Ejecutando</div>
        @else
          <div class="areano">⚠ Detenido</div>
        @endif
        </br></br>
	</form>
	</br>
	</div>
    </div>        
    </div>
    <div id="backmain">
        <form action="/home">
            <button type="submit" class="btn btn-primary">Regresar al menu principal</button>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="js/appfunc.js"></script>
</body>
</html>
