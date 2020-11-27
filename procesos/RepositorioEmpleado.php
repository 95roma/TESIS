<?php
class RepositorioEmpleado{
    public static function insertar_empleado($conexion, $objeto) {
        $objeto_insertado = false;//bandera para saber si se registro el empleado
       
        if (isset($conexion)) {
            try {
               
                $nombre = $objeto->getNombre();
                $apellido = $objeto->getApellido();
                $direc = $objeto->getDireccion();
                $correo = $objeto->getCorreo();
                $especialidad = $objeto->getIdEspecialidad();
                $genero = $objeto->getSexo();
                $tel = $objeto->getTelefono();
                $estado = $objeto->getEstado();
                //$especialidad = $objeto->get;

                $sql = 'INSERT INTO empleado (idempleado, idespecialidad, nombree, apellidoe, sexo, estado, telefono,correo, direccion)'
                        . ' values ((select count(idempleado) from empleado),:especialidad, :nombre, :apellido, :genero,:estado , :tel, :correo, :direc)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
///estos son alias para que PDO pueda trabajar 
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':especialidad', $especialidad, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':genero', $genero, PDO::PARAM_STR);
                $sentencia->bindParam(':tel', $tel, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
                $sentencia->bindParam(':direc', $direc, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_STR);

              $objeto_insertado = $sentencia->execute();
             //$accion = 'Se registró al siguiente encargado de mantenimiento: ' . $nombre . ", con direccion ". $direccion . ", telefono ". $telefono.", y correo ".$correo ;
           
             
             //self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                //echo '<script>Swal.fire("No se puedo realizar el registro", "Revise los datos ingresados  ", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        
        return $objeto_insertado;
    }
    
     public static function lista_empleado($conexion) {//retorna los activos dañados a la seccion de mantenimineto
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from empleado where  estado = 't'  ORDER BY nombree Desc";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }
    
    public static function obtener_empleado($conexion,$id) {//retorna los activos dañados a la seccion de mantenimineto
        $empleado = new Empleado();
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from empleado where  idempleado = '$id' ";
               foreach ($conexion->query($sql) as $row) {
                    $empleado->setIdempleado($row["idempleado"]);
                    $empleado->setIdEspecialidad($row["idespecialidad"]);
                    $empleado->setSexo($row["sexo"]);
                    $empleado->setTelefono($row["telefono"]);
                    $empleado->setCorreo($row["correo"]);
                    $empleado->setNombre($row["nombree"]);
                    $empleado->setApellido($row["apellidoe"]);
                    $empleado->setDireccion($row["direccion"]);
                    $empleado->setEstado($row["estado"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $empleado;//enviamos la lista
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

