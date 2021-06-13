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
     <div class="col-md-3">
       <label>Urianalisis</label>
    <button id="examen1" name="singlebutton" class="btn btn-primary">Asignar</button>
     </div>
     <div class="col-md-3">
      <label>Examen N 2</label>
    <button id="examen2" name="singlebutton" class="btn btn-primary">Asignar</button>
     </div>
     <div class="col-md-3">
       <label>Examen N 3</label>
    <button id="examen3" name="singlebutton" class="btn btn-primary">Asignar</button>
     </div>
    
    <!--<div id='calendar'></div>-->

    </div>
</section>


<!-- MODAL DE REGISTRO -->

 <div class="modal fade" id="modalExamen1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Datos Basicos</b></h4>
            </div>
            <div class="modal-body">
            <fieldset>
				<table class="tbl-registro" width="100%">
                	<tr>
                    	<td>Nombre: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>

                    	<td>Fecha: </td>
                        <td><input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled="disabled"/></td>
                       
                      <td>Especie: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                             <option value="0">---Elija una Opcion--</option>
                            <option value="1">Canino</option>
                            <option value="2">Felino</option>
                            </select></td>
                         </tr>
                      <!--<td colspan="4"><input type="button" id="generarAsistencia" class="btn btn-success" value="Ingresar Alumnos" /></td>-->
                   <tr>
                    <td>Raza: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                             <option value="0">---Elija una Opcion--</option>
                            <option value="1">Poodle</option>
                            <option value="2">Pastor Aleman</option>
                            </select></td>

                            <td>Mascota: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="0">---Elija una Opcion--</option>
                            <option value="1">Nico</option>
                            <option value="2">Orion</option>
                            </select></td>

                               <td>Sexo: </td>
                        <td><select id="selectbasic" name="selectbasic" class="form-control">
                             <option value="0">---Elija una Opcion--</option>
                            <option value="1">Macho</option>
                            <option value="2">Hembra</option>
                            </select></td>                           

                    </tr>                    


                     <tr>
                      <!--<td colspan="4"><input type="button" id="generarAsistencia" class="btn btn-success" value="Ingresar Alumnos" /></td>-->
                    <td>Proietario: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>

                            <td>Veterinario: </td>
                           <td><select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="0">---Elija una Opcion--</option>
                            <option value="1">Dr Oscar Luna</option>
                            <option value="2">Dra Maarta</option>
                            </select></td>

                            <td>Edad: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="5"/></td>
                    </tr>
                </table>
                </fieldset>

<h4 class="modal-title" align="center" id="myModalLabel"><b>Urianalisis</b></h4>
         <div class="modal-footer">
          <h4 class="modal-title" align="left" id="myModalLabel"><b>Examen Fisico</b></h4><br>
                <fieldset>

        <table class="tbl-registro" width="100%">
                  <tr>
                      <td>Color: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="2"/></td>
                      <td>Aspecto: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                       <td>Densidad: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                    </tr>
                    

                       <tr>
                      <td>PH: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="2"/></td>
                      <td>Examen Quimico: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                       <td>Proteinas: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                    </tr>
                      <tr>
                      <td>Cetona: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="2"/></td>
                      <td>Glucosa: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                       <td>Bilirrubina: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                    </tr>

                     <tr>
                      <td>Urobilinogeno: </td>
                        <td><input type="text" class="form-control" id="codRegistro" maxlength="2"/></td>
                      <td>Sangre: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                       <td>Hemoglobina: </td>
                        <td><input type="text" class="form-control" value="" /></td>
                    </tr>

                     </table>
                </fieldset>
        <h4 class="modal-title" align="center" id="myModalLabel"><b>Metodo de obtencion</b></h4>
         <div class="modal-footer">
          <fieldset>

        <table class="tbl-registro" width="100%">    
                     <tr>
                      
                      <td>Miccion</td>
                        <td><input type="radio" class="form-control" /></td>
                      <td>Cateterismo: </td>
                        <td><input type="radio" class="form-control" /></td>
                       <td>Cistocentesis: </td>
                        <td><input type="radio" class="form-control" /></td>
                    </tr>                  

                </table>
                </fieldset>
 <h4 class="modal-title" align="center" id="myModalLabel"><b>Metodo de obtencion</b></h4>
         <div class="modal-footer">
          <fieldset>

        <table class="tbl-registro" width="100%">    
               <td>Observaciones: </td>
                    <tr>
                      <td><textarea class="form-control" rows="3"></textarea></td>
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
              <h4 class="modal-title" id="myModalLabel"><b>Asignación de citas</b></h4>
            </div>
            <div class="modal-body" id="datosAqui">
            </div>
          </div>
       </div>
   </div>   

</body>
</html>