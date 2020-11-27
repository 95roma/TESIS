<?php
class Empleado{
    private $idEmpleado;
    private $nombre;
    private $apellido;
    private $sexo;
    private $correo;
    private $telefono;
    private $direccion;
    private $estado;
    private $idEspecialidad;
    
    function __construct() {
        
    }
    
    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getIdEspecialidad() {
        return $this->idEspecialidad;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setIdEspecialidad($idEspecialidad) {
        $this->idEspecialidad = $idEspecialidad;
    }


}
?>