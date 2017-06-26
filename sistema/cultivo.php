<?php

class Cultivo
{
    private $idCultivo;
    private $nombre;
    private $estado;

     function __construct($idCultivo, $nombre, $estado) {
       $this->idCultivo = $idCultivo;
       $this->nombre = $nombre;
       $this->estado = $estado;
     }
    
     function setIdCultivo($idCultivo){
       $this->idCultivo = $idCultivo;
     } 
     function getIdCultivo(){
       return $this->idCultivo;
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


