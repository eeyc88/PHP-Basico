<?php

class CabeceraTarifario{

  private $idCabeceraTarifario;
  private $idPeriodo;
  private $idCultivo;
  private $fecha;
  private $estado;

    function __construct($idCabeceraTarifario, $idPeriodo, $idCultivo, $fecha, $estado){
    $this->idCabeceraTarifario = $idCabeceraTarifario;
    $this->idPeriodo = $idPeriodo;
    $this->idCultivo = $idCultivo;
    $this->fecha = $fecha;
    $this->estado = $estado;
    }
    function setIdCabeceraTarifario($idCabeceraTarifario){
      $this->idCabeceraTarifario = $idCabeceraTarifario;
    }
    function getIdCabeceraTarifario(){
      return $this->idCabeceraTarifario;
    }
    function setIdPeriodo($idperiodo){
      $this->idPeriodo = $idPeriodo;
    }
    function getIdPeriodo(){
      return $this->idPeriodo;
    }
    function setIdCultivo($idCultivo){
      $this->idCultivo = $idCultivo;
    }
    function getIdCultivo(){
      return $this->idCultivo;
    }
    function setFecha($fecha){
      $this->fecha = $fecha;
    }
    function getFecha(){
      return $this->fecha;
    }
    function setEstado($estado){
      $this->estado = $estado;
    }
    function getEstado(){
      return $this->estado;
    }
}

?>
