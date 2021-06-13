<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Prueba</title> 
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet">
<script src="js/jquery.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

<section>
<ul class="nav nav-pills">
  <li class="active"><a href="index.php">Inicio</a></li>
  <li class="active"><a href="registro.php">Registro</a></li>
  <li class="active"><a href="veterinarios.php">Veterinarios</a></li>
  <li class="active"><a href="asignar_citas.php">Citas</a></li>
  <li class="active"><a href="examenes.php">Examenes</a></li>
  <li class="active"><a href="reportes.php">Reportes</a></li>
</ul>
 <br>   
<div class="panel panel-primary">
   <div class="panel-heading">
    <h3 class="panel-title">Registar Mascota</h3>
  </div>
  <div class="panel-body">
<ul class="nav nav-tabs">
  <li class="active"><a href="#">Registro</a></li>
  <li><a href="table.php">Listado</a></li>
 
</ul>
 <br> 
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<!--<legend>Registro</legend>-->

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Raza</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Poodle</option>
      <option value="2">Labadrador</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Sexo</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Macho</option>
      <option value="2">Hembra</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Veterinario</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Dr David Silva</option>
      <option value="2">Opcion</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Especie</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Canino</option>
      <option value="2">Felino</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Propietario</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Edad</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
  </div>
</div>


</fieldset>
</form>

  <!--  <h2>Historial de Asistencias</h2>
    <br />
    <input type="button" value="GENERAR NUEVO REGISTRO" id="nuevaAsistencia" class="btn btn-primary"/>
    <br />
    <br />
    <table class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>ITEM</th>
                <th>CODIGO DE ASISTENCIA</th>
                <th>FECHA REGISTRADA</th>
                <th>ESTUDIANTES</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
            <?php $clase->conexion();
                     $clase->mostrarAsistencias(); ?>
        </tbody>
    </table>-->
    </div>
    </div>
</section>


<!-- MODAL DE REGISTRO -->

 <div class="modal fade" id="modalAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registro de Asistencias</b></h4>
            </div>
            <div class="modal-body">
            <fieldset><legend>1. Generar Registro</legend>
				<table class="tbl-registro" width="100%">
                	<tr>
                    	<td>Codigo: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>
                    	<td>Fecha: </td>
                        <td><input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td colspan="4"><input type="button" id="generarAsistencia" class="btn btn-success" value="Ingresar Alumnos" /></td>
                    </tr>
                </table>
                </fieldset>
                <div id="mensaje"></div>
                <fieldset><legend>2. Registrar Alumnos</legend>
                <table class="tbl-registro" width="100%">
                	<tr>
                    	<td><input type="text" placeholder="Escriba el nombre y apellido del estudiante..." class="form-control" id="nombEstudiante" disabled="disabled"/></td>
                        <td><input type="button" id="regEstudiante" class="btn btn-primary" value="+" disabled="disabled"/></td>
                    </tr>
                </table>
                </fieldset>
                <br />
                <div id="contenidoRegistro"></div>
                <div class="modal-footer">
                	<input type="button" id="guardar" class="btn btn-default" value="Guardar"/>
                </div>
            </div>
          </div>
        </div>
      </div>
      
      
   <!-- MODAL PARA MOSTRAR EL DETALLE -->

 <div class="modal fade" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registro de Asistencias</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
            </div>
          </div>
       </div>
   </div>   

</body>
</html>