<?php


class Compañiaalpha extends Compañias{

        var $codigo;
    function __costruct($nombre,$telf,$aeronave,$codigo){
        parent::__contruct($nombre,$telf,$aeronave);
        $this->codigo=$codigo;
    }
    function getCodigo(){
        return $this->codigo;
    }
    function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getCodigo."<br>";
    }
}