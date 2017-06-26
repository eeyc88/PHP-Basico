<?php

include_once('medida.php');
include_once('Collector.php');

class MedidaCollector extends Collector
{
 
  function showMedidas() {
    $rows = self::$db->getRows("SELECT idmedida,nombre,estado FROM controlAgricola.medida ");        
    $arrayMedida= array();        
    foreach ($rows as $c){
      $aux = new medida($c{'idmedida'},$c{'nombre'},$c{'estado'} );
      array_push($arrayMedida, $aux);
    }
    return $arrayMedida;        
  }

  function deleteMedidas($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.medida where idmedida = $id", null);             
  }

  function insertMedidas($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.medida (nombre, estado) values ('$nombre' , $estado )" , null);             
  }

  function updateMedidas($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.medida set nombre = '$nombre', estado = $estado where idmedida =$id", null);             
  }

}
?>

