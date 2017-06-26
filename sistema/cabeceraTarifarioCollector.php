<?php

include_once('cabeceraTarifario.php');
include_once('Collector.php');

class CabeceraTarifarioCollector extends Collector
{
  
  function showCabecerasTarifarias() {
    $rows = self::$db->getRows("SELECT * FROM cabeceraTarifario ");        
    $arrayCabeceraTarifario= array();        
    foreach ($rows as $c){
      $aux = new CabeceraTarifario($c{'idCabeceraTarifario'},$c{'idPeriodo'},$c{'idCultivo'},$c{'fecha'},$c{'estado'});
      array_push($arrayCabeceraTarifario, $aux);
    }
    return $arrayCabeceraTarifario;        
  }

}
?>

