<?php

require_once ("empleado.php");

class Personaloperativo extends Empleado{
    var $terminal;

   function __construct ($nombre,$fechanc,$numvuelos,$terminal){
       parent:: __construct($nombre,$fechanc,$numvuelos);
       $this->terminal=$terminal;
   }
   function getTerminal(){
       return $this->terminal;
   }
   function setTerminal($terminal){
       $this->terminal=$terminal;
   }

   function mostrar () {
       parent::mostrar();
       echo $this->getTerminal."<br>";
   }
}