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
    <h3 class="panel-title">Reporte</h3>
  </div>
  <div class="panel-body">

    <table border="0" heigth="800" width="700">
      <tr>
       <td><strong>ID MUESTRA:</stenog> 002</td>
        <td><strong>ESPECIE:</strong> Canino</td>
      </tr>

      <tr>
        <td><strong>NOMBRE:</strong> Muñeco</td>
        <td><strong>SEXO:</strong> Macho</td>
      </tr>
       <tr>
        <td><strong>RAZA:</strong> Poodle</td>
        <td><strong>EDAD:</strong> 7 años</td>
      </tr>
      <tr>
        <td><strong>PROPIETARIO:</strong> Consuelo Press</td>
        <td><strong>VETERINARIO:</strong> Dr Carlos Saenz</td>
      </tr>
    </table>

    <br>
   <div align="center"><strong> URIANALISIS</strong> </div>

    <table border="0" heigth="800" width="900">
      <tr>
        <td><strong>EXAMEN FISICO</strong></td>
        <td><strong>EXAMEN MICROSCOPICO</strong></td>
      </tr>

      <tr>
        <td><strong>COLOR</strong></td>
        <td><strong>ERITROCITOS</strong>................ /campo(400x)</td>
      </tr>

      <tr>
        <td><strong>ASPECTO</strong></td>
        <td><strong>LEUCOCITOS</strong>................. /campo(400x)</td>
      </tr>

      <tr>
        <td><strong>DENSIDAD</strong></td>
        <td><strong>CELULAS EPITELIALES</strong></td>
      </tr>
      <tr>
        <td><strong>PH</strong></td>
        <td><strong>Renales</strong>................ /campo(400x)</td>
      </tr>
      <tr>
        <td><strong>EXAMEN QUIMICO</strong></td>
        <td>      <strong>Transitorias</strong>................ /campo(400x)</td>
      </tr>
      <tr>
        <td><strong>PROTEINAS</strong></td>
        <td>        <strong> Escamosas</strong>................ /campo(400x)</td>
      </tr>
      <tr>
        <td><strong>CETONAS</strong></td>
        <td><strong>CILINDROS</strong>......................... /campo(400x)</td>
      </tr>
      <tr>
        <td><strong>GLUCOSA</strong></td>
        <td><strong>CRISTALES</strong>......................... /campo(400x)</td>
      </tr>
      <tr>
        <td><strong>BILIRRUBINA</strong></td>
        <td><strong>LIPIDOS</strong></td>
      </tr>
      <tr>
        <td><strong>UROBILINOGENO</strong></td>
        <td>         <strong>BACTERIAS</strong></td>
      </tr>
      <tr>
        <td><strong>SANGRE</strong></td>
        <td>        <strong> OTROS</strong></td>
      </tr>
      <tr>
        <td><strong>HEMOGLOBINA</strong></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>METODO DE OBTENCION: MICCION () CATETERISMO () CISTOCENTESIS ()</strong></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Observaciones:</strong></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>PATOLOGO CLINICO: </strong>Dra Maria Fernanda</td>
        <td></td>
      </tr>
      <tr>
        <td>                  Esp. Laboratorio Clinico Veterinario</td>
        <td></td>
      </tr>
    </table>


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