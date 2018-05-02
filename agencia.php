<?php

require_once ("personaloperativo.php"); 
require_once ("altadireccion.php");
require_once ("controladores.php");
require_once ("aeropuerto.php");
require_once ("nacional.php");
require_once ("internacional.php");
require_once ("compañia.php");
require_once ("compañiaalpha.php");
require_once ("compañiaganma.php");



class Agencia{
    var $nombre;
    var $empleados;
    var $aeropuertos;
    var $compañias;

    function __construct ($nombre){
        $this->nombre=$nombre;
        $this->empleados=array();
        $this->aeropuertos=array();
        $this->compañias=array();
    }
    function getNombre(){
        return $this->nombre;
    }
    function setNommbre($nombre){
        $this->nommbre=nombre;
    }
    function mostrar(){
        echo "El nombre de la agencia es  ".$this->getNombre()."<br>";
    }
    // Primero hacer el alta y la baja de empleados.
     function altaEmpleado ($empleado){
        if (count($this->empleados) == 0){
         $this->empleados[] = $empleado;
        }
        else {
         $aux = false;
            for ($i = 0; (($i < count($this->empleados)) && ($aux == false)); $i++){
                if ($this->empleados[$i] == null){
                $this->empleados[$i] = $empleado;
                $aux = true;
               }
            }
            if($aux==false){
                array_unshift($this->empleados,$empleado);
            }
            /*if ($aux == false){
                for ($i = count($this->empleados); $i > 0; $i--){
                $this->empleados[$i] = $this->empleados[$i-1];
                 }
                $this->empleados[0] = $empleado;
                */   
           }     
        }
    function bajaEmpleado ($nombre){
        $pos = false;
        for ($i = 0; ($i < count($this->empleados)) && ($pos == false); $i++){
            if ($nombre == $this->empleados[$i]->getNombrempleado()){
                $this->empleados[$i] = null;
                $pos = true;
            }
        }
    }
}
    function altaAeropuerto($deno){
        if(count($this->aeropuertos)==0){
            $this->aeropuertos[]=$deno;
        }
    }
    function bajaAeropuerto($deno){
            $enc = false;
            for ($i = 0; $i < count ($this->aeropuertos) && ($enc == false); $i++){
                if ($this->aeropuertos[$i]->getDeno() == $deno){
                    $this->aeropuertos[$i] = null;
                    $enc = true;
                }
            }
        }
    function altaCompañia($nombre){
        if(count($this->compañias)==0){
            $this->compañias[$i]=$nombre;
        }
    }
    function bajaCompañia($nombre){
        $enc = false;
        for ($i = 0; $i < count ($this->compañias) && ($enc == false); $i++){
            if ($this->compañias[$i]->getNombre() == $nombre){
                $this->compañias[$i] = null;
                $enc = true;
            }
        }
    }
    
        
    


    