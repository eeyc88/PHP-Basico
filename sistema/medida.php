<?php

class medida
{
    private $idMedida;
    private $nombre;
    private $estado;

     function __construct($idMedida, $nombre, $estado) {
       $this->idMedida = $idMedida;
       $this->nombre = $nombre;
       $this->estado = $estado;
     }
    
     function setIdMedida($idMedida){
       $this->idMedida = $idMedida;
     } 
     function getIdMedida(){
       return $this->idMedida;
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


