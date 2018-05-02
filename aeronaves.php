<?php
require_once ("compañias.php");
class Aeronaves{
    var $marca;
    var $modelo;
    var $plazas;

    function __construct($marca,$modelo,$plazas){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->plazas=$plazas;
    }
    function getMarca(){
        return $this->marca;
    }
    function getModelo(){
        return $this->modelo;
    }
    function getPlazas(){
        return $this->plazas;
    }
    function setMarca($marca){
        $this->marca=$marca;
    }
    function setModelo($modelo){
        $this->modelo=$modelo;
    }
    function setPlazas($plazas){
        $this->plazas=$plazas;
    }

    function mostrar(){

        echo "la marca de la aeronave es".getMarca()."<br>";
        echo "El modelo es".getModelo()."<br>";
        echo "El numero de plazas es de ".getPlazas()."<br>";

    }
}

