<?php

class Area{

  private $idArea;
  private $nombre;
  private $tamano;
  private $estado;

    function __construct($idArea, $nombre, $tamano, $estado){
    $this->idArea = $idArea;
    $this->nombre = $nombre;
    $this->tamano = $tamano;
    $this->estado = $estado;
    }
    function setIdArea($idArea){
      $this->idArea = $idArea;
    }
    function getIdArea(){
      return $this->idArea;
    }
    function setNombre($nombre){
      $this->nombre = $nombre;
    }
    function getNombre(){
      return $this->nombre;
    }
    function setTamano($tamano){
      $this->tamano = $tamano;
    }
    function getTamano(){
      return $this->tamano;
    }
    function setEstado($estado){
      $this->estado = $estado;
    }
    function getEstado(){
      return $this->estado;
    }
}

?>
