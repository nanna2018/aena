<?php



class Compañiagamma extends Compañias{

    var $anofundacion;
function __costruct($nombre,$telf,$aeronave,$anofundacion){
    parent::__contruct($nombre,$telf,$aeronave);
    $this->anofundacion=$anofundacion;
}
function getAnofundacion(){
    return $this->anofundacion;
}
function setAnofundacion($anofundacion){
    $this->anofundacion=$anofundacion;
}

function mostrar () {
    parent::mostrar();
    echo $this->getAnofundacion."<br>";
}
}