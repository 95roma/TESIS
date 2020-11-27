<?php

class metodos{
	public function mostrarDatos($sql){
		$c= new conectar();
		$conexion=$c->conexion();
		$result=pg_query($conexion,$sql);
		return pg_fetch_all($result);
	}

	public function insertarDatos($datos){
		$c= new conectar();
		$conexion=$c->conexion();

		//$sql=;

		$result=pg_query($conexion,"INSERT into especialidad(especialidad,precio) values('$datos[0]',$datos[1])");

	}
}
?>