<!DOCTYPE html>
<html lang="es">
  <head>
    <?php  include_once('../plantilla/cabecera.php') ?> 
    
  </head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">  
            <?php  include_once('../plantilla/menu.php') ?>  
             <div class="top_nav"><!-- top navigation -->
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle"><a id="menu_toggle"><i class="fa fa-bars"></i></a></div>  <!-- para boton cerrar sesion--> 
                </nav>
              </div>
           </div><!-- /top navigation -->
           <div class="right_col" role="main">
            <div class="clearfix"></div><!--limpiador de columnas-->
  <div >
      <button onclick="alertP('esta seguro?')">alerta</button>
      <button onclick="alertC('completado')">alerta 1</button>
      <button onclick="alertA('mensaje')">alerta 2</button>
      <button onclick="alertE('esto esta muy mal')">alerta 2</button>
      <table padding="20px" class="table table-striped" id="dtBasicExample">
          <thead class="">     
          <td>Lunes</td>
          <td>Martes</td>
          <td>Miercoles</td>
          <td>Jueves</td>
          <td>Viernes</td>
          <td>Sabado</td>
          </thead>
          <tbody>
          <tr>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
            <td>Sabado</td>
          </tr>
          <tr>
              <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
            <td>Sabado</td>
          </tr>
          </tbody>
      </table>
  </div>
  </div><!--<div class="right_col" role="main">-->
        </div><!--<div class="main_container"> --> 
    </div><!-- <div class="container body">-->
 <?php  include_once('../plantilla/script.php') ?>   
</body>
</html>


