<?php /*
    include_once '../config/conexion.php';
    include_once '../modelos/Empleado.php';
    include_once '../procesos/RepositorioEmpleado.php';*/

?>
<!DOCTYPE html>
<html lang="en">
 <?php include_once '../plantilla/cabecera.php'; ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include_once '../plantilla/menu.php';  ?>
          
          
           <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar Empleado <small>different form elements</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control">
                                <option>primera</option>
                                <option>segunda</option>
                                <option>tercera</option>
                                <option>cuarta</option>
                            </select>
                             <span class="fa fa-align-right form-control-feedback right" aria-hidden="true"></span>  
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                              </div>
                           </div>
                      </div>
                        
                         
                        
                     
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Resetear</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          


        


          
          </div>
        </div>
          
          
          
          
          
                      
                    <footer>
          <div class="pull-right">
            Policlinica San Vicente <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 <div class="row calendar-exibit">
                      <div class="col-md-3">
                       <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay">
                           <div class="calendar left single" style="display: block;">
                               <div class="daterangepicker_input">
                                   <input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;">
                                   <i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
                                   <div class="calendar-time" style="display: none;">
                                       <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div>
                                       <div class="calendar-table">
                                       </div></div><div class="calendar right" style="display: none;">
                                           <div class="daterangepicker_input">
                                               <input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;">
                                               <i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
                                               <div class="calendar-time" style="display: none;"><div></div>
                                                   <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
                                               </div></div><div class="calendar-table">
                                                   <table class="table-condensed"><thead><tr><th></th>
                                                               <th colspan="5" class="month">Nov 20edfc6</th>
                                                               <th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th>
                                                           </tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr>
                                                               <td class="weekend off available" data-title="r0c0">30</td>
                                                               <td class="off available" data-title="r0c1">31</td>
                                                               <td class="available" data-title="r0c2">1</td>
                                                               <td class="available" data-title="r0c3">2</td>
                                                               <td class="available" data-title="r0c4">3</td>
                                                               <td class="available" data-title="r0c5">4</td>
                                                               <td class="weekend available" data-title="r0c6">5</td></tr><tr>
                                                               <td class="weekend available" data-title="r1c0">6</td>
                                                               <td class="available" data-title="r1c1">7</td>
                                                               <td class="available" data-title="r1c2">8</td>
                                                               <td class="available" data-title="r1c3">9</td>
                                                               <td class="available" data-title="r1c4">10</td>
                                                               <td class="available" data-title="r1c5">11</td>
                                                               <td class="weekend available" data-title="r1c6">12</td></tr><tr>
                                                               <td class="weekend available" data-title="r2c0">13</td>
                                                               <td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td>
                                                               <td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td>
                                                               <td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr>
                                                               <td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td>
                                                               <td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td>
                                                               <td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td>
                                                               <td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td>
                                                               <td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td>
                                                               <td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td>
                                                               <td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr>
                                                               <td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td>
                                                               <td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td>
                                                               <td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td>
                                                               <td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div>
                                                               <div class="ranges" style="display: none;"><div class="range_inputs">
                                                                       <button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> 
                                                                       <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                        

                      </div>

                      
                    </div>
   <?php include_once '../plantilla/script.php';  ?>
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
 <!-- Initialize datetimepicker -->


  
<div id="nuevaEspe"  class="modal " ><!-- para llamar al modal PARA REGISTRAR CATEGORIA-->
    <div class="modal-heading panel-heading text-center">
        
    </div>

    <div class="modal-content ">
        <?php //include('nuevaEspecialidad.php'); ?>

    </div>
    
</div>  
    
   
  
         

<?php/*
              
if (isset($_REQUEST["banderaEmpleaado"])

    ) {  
    
    Conexion::abrir_conexion(); 
    $empleado = new Empleado();
    $empleado->setNombre($_REQUEST["nombreEmple"]);
    $empleado->setApellido($_REQUEST["apellido"]);
    $empleado->setDireccion($_REQUEST["direc"]);
    $empleado->setCorreo($_REQUEST["correo"]);
    $empleado->setIdEspecialidad($_REQUEST["especialidadEmple"]);
    $empleado->setEstado("1");
    
    if($_REQUEST["genero"]=='male'){
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
*/

?>