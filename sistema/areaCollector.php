<?php

include_once('area.php');
include_once('Collector.php');

class AreaCollector extends Collector
{
  
  function showAreas() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.area ");        
    $arrayArea= array();        
    foreach ($rows as $c){
      $aux = new Area($c{'idarea'},$c{'nombre'},$c{'tamano'},$c{'estado'});
      array_push($arrayArea, $aux);
    }
    return $arrayArea;        
  }

  function deleteAreas($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.area where idarea = $id", null);             
  }

  function insertAreas($nombre, $tamano, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.area (nombre, tamano, estado) values ('$nombre' , $tamano , $estado )" , null);             
  }
 
 function updateAreas($id,$nombre, $tamano, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.area set nombre = '$nombre', tamano = $tamano, estado = $estado where idarea =$id", null);             
  }
 
}
?>