<?php

require_once ("empleado.php");

class Controladores extends Empleado{
    var $numhoras;

   function __construct ($nombrempleado,$fechanc,$numvuelos,$numhoras){
       parent:: __construct($nombrempleado,$fechanc,$numvuelos);
       $this->numacciones=$numhoras;
   }
   function getNumhoras(){
       return $this->numhoras;
   }
   function setNumhoras($numhoras){
       $this->numhoras=$numhoras;
   }

   function mostrar () {
       parent::mostrar();
       echo $this->getNumhoras."<br>";
   }
}