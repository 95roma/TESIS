<?php
require_once '../config/conexion.php';
require_once'metodo.php';
$especialidad=$_POST['especialidad'];
$precio=$_POST['precio'];

$datos= array($especialidad,$precio);

$obj= new metodos();

if ($obj->insertarDatos($datos)==1) {
	echo "falloooooo";
	
}else{
	header("location:../index.php");
}
 ?>