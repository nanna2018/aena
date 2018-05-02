<?php
    
    require_once ("pistas.php");
    require_once ("tiendas.php");
    require_once ("vuelos.php");

class Aeropuerto{
        var $deno;
        var $latitud;
        var $longitud;
        var $vuelos;
        var $pistas;
        var $tiendas;

    function __construct($deno, $latitud,$longitud){
        $this->deno=$deno;
        $this->latitud=$latitud;
        $this->longitud=$longitud;
        $this->vuelos=array();
        $this->pistas=array();
        $this->tiendas=array();

    function getDeno(){
        return $this->deno;
    }
    function getLatitud(){
        return $this->latitud;
    }
    function getLongitud(){
        return $this->longitud;
    }
    function setDeno($deno){
        $this->deno=$deno;
    }
    function setLatitud($latitud){
        $this->latitud=$latitud;
    }
    function setLongitud($longitud){
        $this->longitud=$longitud;
    }
    function altaPistas($codigo){
        $this->pistas[]=$codigo;
    }
    function bajaPistas($pistas){
            $enc = false;
            for ($i = 0; $i < count ($this->pistas) && ($enc == false); $i++){
                if ($this->pistas[$i]->getCodigo() == pistas){
                    $this->pistas[$i] = null;
                    $enc = true;
                }
            }
        }

    }
    function altaTiendas($tiendas){
            $this->pistas[]=$tiendas;
    }
    function bajaTiendas($tiendas){
            $enc = false;
            for ($i = 0; $i < count ($this->tiendas) && ($enc == false); $i++){
                if ($this->tiendas[$i]->getNombre() == $tiendas){
                    $this->tiendas[$i] = null;
                    $enc = true;
                }
            }
        }

    
    function altaVuelos($vuelos){
            $this->vuelos[]=$n;
    }
    function bajaVuelos($vuelos){
            $enc = false;
            for ($i = 0; $i < count ($this->vuelos) && ($enc == false); $i++){
                if ($this->vuelos[$i]->getNombre() == $vuelos){
                    $this->vuelos[$i] = null;
                    $enc = true;
                }
            }
        } 


    }  

