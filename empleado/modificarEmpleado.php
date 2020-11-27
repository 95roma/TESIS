<?php 
    include_once '../config/conexion.php';
    include_once '../modelos/Empleado.php';
    include_once '../procesos/RepositorioEmpleado.php';
    
     Conexion::abrir_conexion(); 
     $empleado = new Empleado();
     $empleado = RepositorioEmpleado::obtener_empleado(Conexion::obtener_conexion(), $_GET['uhsk']);
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php  include('../menu/head.php') ?> 
  </head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">  
    <?php  include('../menu/menu.php') ?>     
      <div class="top_nav"><!-- top navigation -->
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>  <!-- para boton cerrar sesion--> 
            </nav>
          </div>
      </div><!-- /top navigation -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modificar Empleado</h2>
                                 
                                  <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form class="form-horizontal form-label-left " id="regisEmple" name="regisEmple">
                       <input type="hidden" name="banderaEmpleaado" id="banderaEmpleaado" >
                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3" for="first-name">Nombre <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" value="<?php echo $empleado->getNombre(); ?>" id="nombreEmple" name="nombreEmple"  required="required" class="form-control col-md-7 col-xs-12">
                             <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3" for="last-name">Apellido <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" value="<?php echo $empleado->getApellido(); ?>" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
                             <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                          <div class="form-group">    
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Dirección</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" value="<?php echo $empleado->getDireccion(); ?>" class="form-control" name="direc" id="direc">
                            <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                        
                          <div class="form-group">    
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Correo</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="email" value="<?php echo $empleado->getCorreo(); ?>" class="form-control" id="correo" name="correo">
                            <span class="fa fa-envelope-o form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                          
                        <div class="form-group">    
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Telefono</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" value="<?php echo $empleado->getTelefono(); ?>" required="" class="form-control" name="tel" id="tel" data-inputmask="'mask' : '999-9999'">
                            <span class="fa fa-phone-square form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
                          
                          <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Fecha de Nacimiento</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="date" value="" required="" class="form-control" id="fecha" data-inputmask="'mask': '99/99/9999'">
                          </div>
                        </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad</label>
                          <div class="col-md-9 col-sm-9 col-xs-9 ">
                                
                              <select required=""  type="text" name="especialidadEmpleM" id="especialidadEmpleM" class="col-lg-11 mdb-select ">

                                <?php
                               include'selecEspecialidad.php';
                                ?>
                            </select>
                              <button class="btn-app" type="button" onclick="nuevaEspe()" >+</button>
                              <button class="btn-app" type="button" onclick="recargarEspecialidad()" >r</button>
                              
                          </div>  
                          </div>
                          
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="genderM" class="btn-group" data-toggle="buttons">
                               
                              <label class="fa fa-male btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                             <?php if($empleado->getSexo()==1){ 
                                 echo '<input type="radio" checked id="male" name="generoM" value="male"> &nbsp; Masculino &nbsp;';}
                                 else{echo '<input type="radio" id="male" name="generoM" value="male"> &nbsp; Masculino &nbsp;';}?> 
                                
                              </label>
                                
                                <div class="col-lg-6"></div>
                              <label class="fa fa-female btn btn-default " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <?php if($empleado->getSexo()==0){
                                  echo ' <input class="fa fa-female" checked type="radio" id="female" name="generoM" value="female"> Femenino';} 
                              else{echo ' <input class="fa fa-female"  type="radio" id="female" name="generoM" value="female"> Femenino';}?> 
                                
                                
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancelar</button>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                          </div>
                        </div>
                      </form><!-- /form input mask -->
                    </div><!--fin de <div class="x_content">-->
                  </div><!-- <div class="x_panel">-->
                </div><!--fin del  <div class="col-md-6 col-sm-12 col-xs-12">-->
            </div><!--<div class="row">-->
            </div>
      </div>
    </div> <!-- /page content -->    
  </div><!--<div class="container body">-->
  <?php  include('../menu/scri.php') ?>    
  
<div id="nuevaEspe"  class="modal " ><!-- para llamar al modal PARA REGISTRAR especialidad-->
    <div class="modal-heading panel-heading text-center">
        
    </div>

    <div class="modal-content ">
        <?php include('nuevaEspecialidad.php'); ?>

    </div>
    
</div>  
  <script>
		window.onload=function() {
                    var gene="";
                    var espe="";
			<?php  echo 'espe="'.$empleado->getIdEspecialidad().'";';
                        if ($empleado->getSexo()==1){
                            echo ' gene="female";';
                        }else{
                            echo ' gene="male";';
                        } ?>
                         //document.getElementById('generM').value=gene;
                       // document.querySelector('[value="'+gene+'"]').checked = true;
                       document.querySelector('#'+gene).checked = true;
                        document.getElementById("especialidadEmpleM").value=espe;
                        //alert(""+espe);
		}
		</script>  
   
    <!-- Initialize datetimepicker -->
          <script>
              $('#myDatepicker').datetimepicker();
              
              $('#myDatepicker2').datetimepicker({
                  format: 'DD.MM.YYYY'
              });
              
              $('#myDatepicker3').datetimepicker({
                  format: 'hh:mm A'
              });
              
              $('#myDatepicker4').datetimepicker({
                  ignoreReadonly: true,
                  allowInputToggle: true
              });

              $('#datetimepicker6').datetimepicker();
              
              $('#datetimepicker7').datetimepicker({
                  useCurrent: false
              });
              
              $("#datetimepicker6").on("dp.change", function(e) {
                  $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
              });
              
              $("#datetimepicker7").on("dp.change", function(e) {
                  $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
              });
          </script>
</body>
</html>
<?php
              
if (isset($_REQUEST["banderaEmpleaado"])

    ) {  
    
    Conexion::abrir_conexion(); 
    $empleado = new Empleado();
    $empleado->setNombre($_REQUEST["nombreEmple"]);
    $empleado->setApellido($_REQUEST["apellido"]);
    $empleado->setDireccion($_REQUEST["direc"]);
    $empleado->setCorreo($_REQUEST["correo"]);
    $empleado->setIdEspecialidad($_REQUEST["especialidadEmpleM"]);
    $empleado->setEstado("1");
    
    if($_REQUEST["generoM"]=='male'){
        $empleado->setSexo("1");
    }else{$empleado->setSexo("0");}
    
    $empleado->setTelefono($_REQUEST["tel"]);
    
    
     $bandera = RepositorioEmpleado::insertar_empleado(Conexion::obtener_conexion(), $empleado);
            
    if($bandera==TRUE){
        echo '<script>Swal.fire("Exito!", "Datos Registrados ", "success");</script>'; 
    }else{
        echo '<script>Swal.fire("No se puedo realizar el registro", "Revise los datos ingresados  ", "error");</script>'; 
    }
    //Conexion::cerrar_conexion(); Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria); 
      
        
}


?>