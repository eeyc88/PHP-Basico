<?php

class DetalleTarifario{

  private $idCabeceraTarifario;
  private $idDetalleTarifario;
  private $idLabor;
  private $idMedida;
  private $valor;

    function __construct($idCabeceraTarifario, $idDetalleTarifario, $idLabor, $idMedida, $valor){
    $this->idCabeceraTarifario = $idCabeceraTarifario;
    $this->idDetalleTarifario = $idDetalleTarifario;
    $this->idLabor = $idLabor;
    $this->idMedida = $idMedida;
    $this->valor = $valor;
    }
    function setIdCabeceraTarifario($idCabeceraTarifario){
      $this->idCabeceraTarifario = $idCabeceraTarifario;
    }
    function getIdCabeceraTarifario(){
      return $this->idCabeceraTarifario;
    }
    function setIdDetalleTarifario($idDetalleTarifario){
      $this->idDetalleTarifario = $idDetalleTarifario;
    }
    function getIdDetalleTarifario(){
      return $this->idDetalleTarifario;
    }
    function setIdLabor($idLabor){
      $this->idLabor = $idLabor;
    }
    function getIdLabor(){
      return $this->idLabor;
    }
    function setIdMedida($idMedida){
      $this->idMedida = $idMedida;
    }
    function getIdMedida(){
      return $this->idMedida;
    }
    function setValor($valor){
      $this->valor = $valor;
    }
    function getValor(){
      return $this->valor;
    }
}

?>
