<?php 
    include_once '../config/conexion.php';
    include_once '../modelos/Empleado.php';
    include_once '../procesos/RepositorioEmpleado.php';
    include_once '../procesos/RepositorioEspecialidad.php';
Conexion::abrir_conexion();
$listado = RepositorioEmpleado::lista_empleado(Conexion::obtener_conexion());
?>
<!DOCTYPE html>
<html lang="es">
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
                  <div class="nav toggle"><a id="menu_toggle"><i class="fa fa-bars"></i></a></div>  <!-- para boton cerrar sesion--> 
                </nav>
              </div>
           </div><!-- /top navigation -->
           <div class="right_col" role="main">
            <div class="clearfix"></div><!--limpiador de columnas-->
             <div class="panel-body">    
                 <div class="form-group">
 <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Type to search table...">
</div>

                    <table padding="20px" class="table table-striped" id="dtBasicExample">
                        <thead class="">     
                        <td class="text-center" >&nbsp;</td>
                        <th class="text-center">Nombre</th>
                        <th class="text-center" >Especialidad</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">&nbsp;</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listado as $fila) {
                                ?>
                                <tr>
                                    <td><button class="btn-success" onclick="modificarEmpleado('<?php echo $fila['idempleado']; ?>')"><i class="fa fa-edit"></i></button></td>
                                    <td class="text-left"><?php echo $fila['nombree']." ".$fila['apellidoe']; ?></td>
                                    <td class="text-center"><?php echo RepositorioEspecialidad::obtener_especialidad(Conexion::obtener_conexion(), $fila['idespecialidad']); ?></td>
                                    <td class="text-center"><?php echo $fila['telefono'];            ?></td>
                                    <td class="text-center <?php
                                    if ($fila['estado'] == 1) {
                                        echo "btn-success";
                                    }
                                    if ($fila['estado'] == 0) {
                                        echo "btn-danger";
                                    }
                                    ?>"
                                        style="font-size: 16px">
                                            <?php
                                            if ($fila['estado'] == 1) {
                                                echo "Disponible".$fila['estado'];
                                            }
                                            if ($fila['estado'] == 0) {
                                                echo "Dado de Baja";
                                            }
                                            
                                            ?>

                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn_primary"   onclick="" class="fa fa-wrench">
                        </span></a>
                                    </td>


                                </tr>
<?php } ?>

                        </tbody>
                    </table>
                </div>
               <?php //include_once 'nuevaEspecialidad.php'; ?>
           </div><!--<div class="right_col" role="main">-->
        </div><!--<div class="main_container"> --> 
    </div><!-- <div class="container body">-->
 <?php  include('../menu/scri.php') ?>   
</body>
</html>

 