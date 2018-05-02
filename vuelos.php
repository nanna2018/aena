<?php
require_once ("aeropuerto.php");
class Vuelos{
  var $numero;
  var $origen;
  var $destino;
  var $fecha;
  var $hora;

  function __construct ($numero,$origen,$destino,$fecha,$hora){
      $this->numero=$numero;
      $this->origen=$origen;
      $this->destino=$destino;
      $this->fecha=$fecha;
      $this->hora=$hora;
    }
    function getNumero(){
        return $this->numero;
    }
    function getOrigen(){
        return $this->origen;
    }
    function getDestino(){
        return $this->destino;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getHora(){
        return $this->hora;
    }
    function setNumero($numero){
        $this->numero=$numero;
    }
    function setOrigen($origen){
        $this->origen=$origen;
    }
    function setDestino($destino){
        $this->destino=$destino;
    }
    function setFecha($fecha){
        $this->fecha=$fecha;
    }
    function setHora($hora){
        $this->hora=$hora;
    }
 function mostrar(){
     echo $this->numero;
     echo"<br>";
     echo $this->origen;
     echo"<br>";
     echo $this->Destino;
     echo"<br>";
     echo $this->fecha;
     echo"<br>";
     echo $this->hora;
     echo"<br>";
 }
}

    



