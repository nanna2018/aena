<?php
require_once ("aeropuerto.php");
class Tiendas{
     var $nombre;
     var $numlocal;
     var $metros;

    function __construct($nombre,$numlocal,$metros){
        $this->nombre=$nombre;
        $this->numlocal=$numlocal;
        $this->metros=$metros;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getNumlocal(){
        return $this->numlocal;
    }
    function getMetros(){
        return $this->metros;
    }
    function setNombre($nombre){
        $this->nommbre=$nombre;
    }
    function setNumlocal($numlocal){
        $this->numlocal=$numlocal;
    }
    function setMetros($metros){
        $this->metros=$metros;
    }

    function mostrar(){
        echo "El nombre de la tienda es ".getNombre()."<br>";
         echo "El nummero del local es ".getNumlocal()."<br>";
         echo "Tiene  ".getMetros()."metros"."<br>";
         
    }
}