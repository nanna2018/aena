<?php

require_once ("aeropuerto.php");
class Internacional extends Aeropuerto{
    var $numterminales;
    var $numpistas;

    function __costruct($deno, $latitud,$longitud,$vuelos,$pistas,$tiendas,$numterminales,$numpistas){
        parent::__contruct($deno, $latitud,$longitud,$vuelos,$pistas,$tiendas);
        $this->numterminales=$numterminales;
        $this->numpistas=$numpistas;
    }
    //falta getters y setters

    function mostrar () {
        parent::mostrar();
        echo $this->g."<br>";
    }

}