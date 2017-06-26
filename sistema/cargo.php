<?php

class Cargo
{
    private $idCargo;
    private $nombre;
    private $estado;

     function __construct($idCargo, $nombre, $estado) {
       $this->idCargo = $idCargo;
       $this->nombre = $nombre;
       $this->estado = $estado;
     }
    
     function setIdCargo($idCargo){
       $this->idCargo = $idCargo;
     } 
     function getIdCargo(){
       return $this->idCargo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setEstado($estado){
       $this->estado = $estado;
     } 
     function getEstado(){
       return $this->estado;
     } 

}


?> 


