<?php

class Periodo{

  private $idPeriodo;
  private $nombre;
  private $fechainicio;
  private $fechafin;
  private $estado;

    function __construct($idPeriodo, $nombre, $fechainicio, $fechafin, $estado){
    $this->idPeriodo = $idPeriodo;
    $this->nombre = $nombre;
    $this->fechainicio = $fechainicio;
	$this->fechafin = $fechafin;
    $this->estado = $estado;
    }
    function setidPeriodo($idPeriodo){
      $this->idPeriodo = $idPeriodo;
    }
    function getidPeriodo(){
      return $this->idPeriodo;
    }
    function setNombre($nombre){
      $this->nombre = $nombre;
    }
    function getNombre(){
      return $this->nombre;
    }
    function setFechainicio($fechainicio){
      $this->fechainicio = $fechainicio;
    }
    function getFechainicio(){
      return $this->fechainicio;
    }
	function setFechafin($fechafin){
      $this->fechafin = $fechafin;
    }
    function getFechafin(){
      return $this->fechafin;
    }
    function setEstado($estado){
      $this->estado = $estado;
    }
    function getEstado(){
      return $this->estado;
    }
}

?>
