@extends('layouts.appfunc')

@section('headerappfunc')
<h1>Reportes</h1>
@endsection

@section('contentappfunc')


<!DOCTYPE html>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<html>
<style type="text/css">
	.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Reporte de Incidente</legend>

                        <div class="form-group">
                        	<div class="col-md-6">
                                <span>Ingrese sus Nombres</span>
                            </div>
                           
                            <div class="col-md-6">
                                <input id="fname" name="name" type="text" placeholder="Nombres" class="form-control" style="width: 60%">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<div class="col-md-6">
                                <span>Ingrese sus Apellidos</span>
                            </div>
                           
                            <div class="col-md-6">
                                <input id="flastname" name="name" type="text" placeholder="Apellidos" class="form-control" style="width: 60%">
                            </div>
                        </div>

                        <div class="form-group">
                        	<div class="col-md-6">
                                <span>Seleccione el tipo de incidente</span>
                            </div>
                           
                            <div class="col-md-6">
                                <select class="form-control" style="width: 60%" id="Tipo">
						        <option value="Incendio">Incendio</option>
						        <option value="Robo">Robo</option>
						        <option value="Problemas Electricos">Problemas Electricos</option>
						        <option value="Rutinario">Rutinario</option>
						      </select>
                            </div>
                        </div>

                  

                        <div class="form-group">
                            <div class="col-md-6">
                                <span>Indique los detalles</span>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingrese los detalles del incidente, con mucho detalle." rows="7" style="width: 70%"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary btn-lg" id="btnEnviar">Enviar Reporte</button>

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</html>
<script type="text/javascript">
	$(document).ready(function(){

     $("#btnEnviar").click(function(){
        enviar();
     });

     function enviar(){
     	$("#fname").val("");
        $("#flastname").val("");
        $("#Tipo").val("");
        $("#message").val("");
        alert("El reporte fue enviado correctamente");
  
     }
});

</script>
@endsection