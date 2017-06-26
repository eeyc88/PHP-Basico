<?php

include_once('labor.php');
include_once('Collector.php');

class LaborCollector extends Collector
{
  
  function showLabores() {
    $rows = self::$db->getRows("SELECT * FROM labor ");        
    $arrayLabor= array();        
    foreach ($rows as $c){
      $aux = new Labor($c{'idLabor'},$c{'idGrupoLabor'},$c{'nombre'},$c{'estado'});
      array_push($arrayLabor, $aux);
    }
    return $arrayLabor;        
  }

function deleteLabores($idLabor) {
    $rows = self::$db->deleteRow("DELETE FROM $this->tabla where $this->idLabor = $idLabor", null);             
  }

function updateLabores($id,$idGrupoLabor,$nombre, $estado) {
    $rows = self::$db->updateRow("Update $this->tabla set $this->idGrupoLabor = '$idGrupoLabor', $this->nombre = '$nombre', $this->estado = $estado where $this->idLabor =$idLabor", null);             
  }

 function insertLabores($idGrupoLabor,$nombre, $estado) {
    $rows = self::$db->insertRow("Insert into $this->tabla ($this->idGrupoLabor, $this->nombre, $this ->estado) values ('$idGrupoLabor' , '$nombre' , '$estado' )" , null);             
  }
}
?>

