<?php

include_once('detalleTarifario.php');
include_once('Collector.php');

class DetalleTarifarioCollector extends Collector
{
  
  function showDetallesColectores() {
    $rows = self::$db->getRows("SELECT * FROM detalleTarifario ");        
    $arrayDetalleTarifario= array();        
    foreach ($rows as $c){
      $aux = new DetalleTarifario($c{'idCabeceraTarifario'},$c{'idDetalleTarifario'},$c{'idLabor'},$c{'idMedida'},$c{'valor'});
      array_push($arrayDetalleTarifario, $aux);
    }
    return $arrayDetalleTarifario;        
  }

}
?>

