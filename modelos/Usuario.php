<?php
class Usuario {
    private $idUsuario;
    private $usuario;
    private $pass;
    private $estado;
    private $idEmpleado;
    private $tipoEmpleado;
    
    function __construct() {
        
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPass() {
        return $this->pass;
    }

    function getEstado() {
        return $this->estado;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getTipoEmpleado() {
        return $this->tipoEmpleado;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setTipoEmpleado($tipoEmpleado) {
        $this->tipoEmpleado = $tipoEmpleado;
    }


}

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

