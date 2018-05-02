<?php


class Empleado{
    var $nombrempleado;
    var $fechanc;
    var $numvuelos;
    function __construct($nombrempleado,$fechanc,$numvuelos){
        $this->nombrempleado=$nombrempleado;
        $this->fechanc=$fechanc;
        $this->numvuelos=$numvuelos;
    }
    function getNombrempleado(){
        return $this->nombrempleado;
    }
    function getFechanc(){
        return $this->fechanc;
    }
    function getNumvuelos(){
        return $this->numvuelos;
    }   
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setFechanc($fechanc){
        $this->fechanc=$fechanc;
    }
    function setNumvuelos($numvuelos){
        $this->numvuelos=$numvuelos;
    }
}   
    
    
