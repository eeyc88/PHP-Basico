<?php

class Departamento
{
    private $idDepartamento;
    private $nombre;
    private $estado;

     function __construct($idDepartamento, $nombre, $estado) {
       $this->idDepartamento = $idDepartamento;
       $this->nombre = $nombre;
       $this->estado = $estado;
     }
    
     function setIdDepartamento($idDepartamento){
       $this->idDepartamento = $idDepartamento;
     } 
     function getIdDepartamento(){
       return $this->idDepartamento;
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


