<?php
  require_once ("aeropuerto.php");
 class Pistas{
     var $codigo;
     var $longitud;
     var $orientacion;

     function __construct($codigo,$longitud,$orientacion){
         $this->codigo=$codigo;
         $this->longitud=$longitud;
         $this->orientscion=$orientacion;
     }
     function getCodigo(){
         return $this->codigo;
     }
     function getLongitud(){
         return $this->longitud;
     }
     function getOrientacion(){
         return $this->orientacion;
     }
     function setCodigo(){
        $this->codigo=$codigo;
     }
     function setLongitud($longitud){
         $this->longitug=$longitud;
     }
     function setOrientacion($orientacion){
         $this->orientacion=$orientacion;
     }
     function mostrar(){
         echo "La longitud es de ".getLongitud()."<br>";
         echo "La orientaacion es de ".getOrientacion()."<br>";
     }
 }