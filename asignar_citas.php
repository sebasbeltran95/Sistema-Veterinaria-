<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Citas</title> 
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/citas.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link rel='stylesheet' type='text/css' href='js/fullcalendar.css' />
<!--<script type='text/javascript' src='js/jquery.js'></script>-->
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script  src = 'js/myjava.js' ></script> 
<script  src = 'js/lib/moment.min.js' ></script> 
<script  src = 'js/fullcalendar.min.js' ></script>
<script src='js/lang-all.js'></script>
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
    <h3 class="panel-title">Asignar citas</h3>
  </div>
  <div class="panel-body">
     <div class="col-md-4">
    <button id="nuevaAsistencia" name="singlebutton" class="btn btn-primary">Asignar Cita</button>
  <input type= "text" name= "id" />
  </div>
    <div id='calendar'></div>

    </div>
</section>


<!-- MODAL DE REGISTRO -->

 <div class="modal fade" id="modalAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Asignación de citas</b></h4>
            </div>
            <div class="modal-body">
            <fieldset>
				<table class="tbl-registro" width="100%">
                	<tr>
                    	<td>Codigo: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>
                    	<td>Fecha: </td>
                        <td><input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<!--<td colspan="4"><input type="button" id="generarAsistencia" class="btn btn-success" value="Ingresar Alumnos" /></td>-->
                    <td>Especialista: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                             <option value="0">---Elija una Opcion--</option>
                            <option value="1">Dr Andres Perez</option>
                            <option value="2">Dr Juan Rojas</option>
                            </select></td>

                            <td>Mascota: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="0">---Elija una Opcion--</option>
                            <option value="1">Nico</option>
                            <option value="2">Orion</option>
                            </select></td>
                    </tr>
                </table>
                </fieldset>
               <!-- <div id="mensaje"></div>
                <fieldset><legend>2. Registrar Alumnos</legend>
                <table class="tbl-registro" width="100%">
                	<tr>
                    	<td><input type="text" placeholder="Escriba el nombre y apellido del estudiante..." class="form-control" id="nombEstudiante" disabled="disabled"/></td>
                        <td><input type="button" id="regEstudiante" class="btn btn-primary" value="+" disabled="disabled"/></td>
                    </tr>
                </table>
                </fieldset>-->
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
              <h4 class="modal-title" id="myModalLabel"><b>Asignación de citas</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
            </div>
          </div>
       </div>
   </div>   

</body>
</html>