<?php


class Compañias{

    var $nombre;
    var $telf;
    var $aeronave;

    function __construct($nombre,$telf,$aeronave){
      $this->nombre=$nombre;
      $this->telf=$telf;
      $this->aeronave= array();
    }
    function getNombre(){
        return $this->nombre;
    }
    function getTelf(){
        return $this->telf;
    }
    
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function seTelf($telf){
        $this->telf=$telf;
    }
    
    
}


