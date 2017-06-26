<?php

class GrupoLabor
{
    private $idGrupoLabor;
    private $nombre;
    private $estado;

     function __construct($idGrupoLabor, $nombre, $estado) {
       $this->idGrupoLabor = $idGrupoLabor;
       $this->nombre = $nombre;
       $this->estado = $estado;
     }
    
     function setIdGrupoLabor($idGrupoLabor){
       $this->idGrupoLabor = $idGrupoLabor;
     } 
     function getIdGrupoLabor(){
       return $this->idGrupoLabor;
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


