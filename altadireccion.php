<?php

require_once ("empleado.php");


class Altadireccion extends Empleado{
     var $numacciones;

    function __construct ($nombre,$fechanc,$numvuelos,$numacciones){
        parent:: __construct($nombre,$fechanc,$numvuelos);
        $this->numacciones=$numacciones;
    }
    function getNumacciones(){
        return $this->numacciones;
    }
    function setNumacciones($numacciones){
        $this->numacciones=$numacciones;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getNumacciones."<br>";
    }
}