
 <?php
include_once '../config/conexion.php';
    include_once '../modelos/Especialidad.php';
    include_once '../procesos/RepositorioEspecialidad.php';
?>

<div class="row "> 
                     <div class=" col-md-8 ">
                        <div class="x_panel ">
                               <div class="x_title">
                                <h2>Registrar Especialidad</h2>
                                 
                                  <div class="clearfix"></div>
                              </div><!--<div class="x_title">-->
                          <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left"  method="post" name="formEspe" id="formEspe" onsubmit="recargarEspecialidad()" autocomplete="off" enctype="multipart/form-data">
                                  <input type="hidden" name="banderaCAtegoria" id="banderaCAtegoria" >
                                 <div class="form-group " >
                                     <label class="control-label col-md-4" for="last-name">Nombre <span class="required"></span> </label>
                                   <div class="col-md-4 ">
                                   <input type="text" id="especialidad" name="especialidad" required="required" class="form-control col-md-7 col-xs-">
                                   <span class="fa fa-tasks form-control-feedback right" aria-hidden="true"></span>
                                   </div>
                                </div>

                                 <div class="form-group">
                                     <label class="control-label  col-md-4 " for="last-name">Costo de consulta <span class="required"></span> </label>
                                   <div class="col-md-4">
                                   <input type="text" id="precio" name="precio" required="required" class="form-control col-md-7 col-xs-12">
                                   <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                                   </div>
                                </div>

                                <div class="form-group ">
                                <div class=" text-center">
                                    <button type="submit" form="formEspe" class="btn btn-success">Guardar</button>
                                    <button type="reset" data-dismiss="modal"  class="btn btn-primary">Cancelar</button>
                                  
                                </div>
                              </div>

                              </form>
                          </div><!-- fin de <div class="x_content">-->

                        </div><!-- fin <div class="x_panel">-->
                     </div><!-- <div class="col-md-6 col-sm-12 col-xs-12">-->
                </div><!-- <div class="row ">-->
   <?php  include_once('../menu/scri.php') ?>               
 <?php
              
if (isset($_REQUEST["banderaCAtegoria"])

    ) {  
    
    Conexion::abrir_conexion(); 

    $especialidad = new Especialidad();
    $especialidad->setEspecialidad($_REQUEST["especialidad"]);
    $especialidad->setPrecio($_REQUEST["precio"]);
              
    $bandera = RepositorioEspecialidad::insertar_especialidad(Conexion::obtener_conexion(), $especialidad);
            
    if($bandera==TRUE){
        echo '<script>Swal.fire("Exito!", "Datos Registrados ", "success");</script>'; 
    }else{
        echo '<script>  Swal.fire("No se puedo realizar el registro", "Revise los datos ingresados  ", "error");</script>'; 
    }
    //Conexion::cerrar_conexion(); Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria); 
      
        
}


?>
                
  


