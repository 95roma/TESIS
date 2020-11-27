<?php
include_once '../procesos/RepositorioEspecialidad.php';
include_once '../config/conexion.php';
include_once '../modelos/Especialidad.php';


Conexion::abrir_conexion();
$lista_especialidad = RepositorioEspecialidad::lista_especilidad(Conexion::obtener_conexion());
foreach ($lista_especialidad as $lista) {
echo"<option id='".$lista->getIdEspecialidad()."' value='".$lista->getIdEspecialidad()."'>".$lista->getEspecialidad()."</option>";
}
                                
?> 


