<?php
class Especialidad {
    private $idEspecialidad;
    private $especialidad;
    private $precio;
    
    function __construct() {
        
    }
    
    function getIdEspecialidad() {
        return $this->idEspecialidad;
    }

    function getEspecialidad() {
        return $this->especialidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setIdEspecialidad($idEspecialidad) {
        $this->idEspecialidad = $idEspecialidad;
    }

    function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }



}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

