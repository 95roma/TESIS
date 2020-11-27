<?php
class RepositorioEspecialidad {
    
     public static function insertar_especialidad($conexion, $especialidad) {
        $especialidad_insertado = false;
       
        if (isset($conexion)) {
            try {
               
                $nombre = $especialidad->getEspecialidad();
                $precio = $especialidad->getPrecio();
                
                
               

                $sql = 'INSERT INTO especialidad (idespecialidad, especialidad, precio)'
                        . ' values ((select count(idespecialidad) from especialidad)+1, :nombre, :precio)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
///estos son alias para que PDO pueda trabajar 
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':precio', $precio, PDO::PARAM_STR);

              $especialidad_insertado = $sentencia->execute();
             //$accion = 'Se registró al siguiente encargado de mantenimiento: ' . $nombre . ", con direccion ". $direccion . ", telefono ". $telefono.", y correo ".$correo ;
           
             
             //self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                //echo '<script>Swal.fire("No se puedo realizar el registro", "Revise los datos ingresados  ", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        
        return $especialidad_insertado;
    }
    
    //lista de especialidad
     public static function lista_especilidad($conexion) {
        $lista = array();
        if (isset($conexion)) {
            try {
                $sql = "select idespecialidad, especialidad from especialidad";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $especialidad = new Especialidad();
                        $especialidad ->setIdEspecialidad($fila['idespecialidad']);
                        $especialidad ->setEspecialidad($fila['especialidad']);
                       
                      //  $proveedor->setDireccion($fila['direccion']);
                       // $proveedor->setTelefono($fila['telefono']);
                       // $proveedor->setCorreo($fila['correo']);
                       // $proveedor->setFax($fila['fax']);

                        $lista[] = $especialidad;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista;
    }
    
    //obtenemos el nombre de la especialidad
    public static function obtener_especialidad($conexion, $cod) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT especialidad from especialidad where idespecialidad = '$cod'";

                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
