<?php

class Labor{

  private $idLabor;
  private $idGrupoLabor;
  private $nombre;
  private $estado;

    function __construct($idLabor, $idGrupoLabor, $nombre, $estado){
    $this->idLabor = $idLabor;
    $this->idGrupoLabor = $idGrupoLabor;
    $this->nombre = $nombre;
    $this->estado = $estado;
    }
    function setIdLabor($idLabor){
      $this->idLabor = $idLabor;
    }
    function getIdLabor(){
      return $this->idLabor;
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
