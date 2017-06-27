<?php

class Usuario
{
    private $idUsuario;
    private $nombre;
    private $clave;

     function __construct($idUsuario, $nombre, $clave) {
       $this->idUsuario = $idUsuario;
       $this->nombre = $nombre;
       $this->clave = $clave;
     }

     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setNombre($nombre){
	       $this->nombre = $nombre;       
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 

}


?> 


