<!DOCTYPE html>
<html lang="es">
  <head>
    <?php  include_once('../menu/head.php') ?> 
    
  </head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">  
            <?php  include_once('../menu/menu.php') ?>  
             <div class="top_nav"><!-- top navigation -->
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle"><a id="menu_toggle"><i class="fa fa-bars"></i></a></div>  <!-- para boton cerrar sesion--> 
                </nav>
              </div>
           </div><!-- /top navigation -->
           <div class="right_col" role="main">
            <div class="clearfix"></div><!--limpiador de columnas-->
               <?php include_once 'nuevaEspecialidad.php'; ?>
           </div><!--<div class="right_col" role="main">-->
        </div><!--<div class="main_container"> --> 
    </div><!-- <div class="container body">-->
 <?php  include_once('../menu/scri.php') ?>   
</body>
</html>

 