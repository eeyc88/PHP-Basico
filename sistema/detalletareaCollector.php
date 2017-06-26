<?php

include_once('detalletarea.php');
include_once('Collector.php');

class DetalleTareaCollector extends Collector
{
  
  function showDetalleTareas() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.detalletarea ");        
    $arrayDetalleTarea= array();        
    foreach ($rows as $c){
      $aux = new DetalleTarea($c{'iddetalletarea'},$c{'idcabeceratarea'},$c{'idempleado'},$c{'idlabor'},$c{'cantidad'},$c{'tarifa'});
      array_push($arrayDetalleTarea, $aux);
    }
    return $arrayDetalleTarea;        
  }

  function deleteDetalleTarea($iddetalletarea) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.detalletarea where iddetalletarea = $iddetalletarea",null);   
    return true;          
  }

  function insertDetalleTarea($iddetalletarea, $idcabeceratarea, $idempleado, $idlabor, $cantidad, $tarifa) {
    $rows = self::$db->insertRow("INSERT INTO controlAgricola.detalletarea (iddetalletarea, idcabeceratarea, idempleado, idlabor, cantidad, tarifa) VALUES ($iddetalletarea, $idcabeceratarea, $idempleado , $idlabor, $cantidad, $tarifa)",null);             
	return true;
  }

  function updateDetalleTarea($iddetalletarea, $idcabeceratarea, $idempleado, $idlabor, $cantidad, $tarifa) {
    $rows = self::$db->updateRow("UPDATE controlAgricola.detalletarea SET idcabeceratarea = $idcabeceratarea, idempleado = '$idempleado', idlabor = $idlabor, cantidad = $cantidad, tarifa = $tarifa WHERE iddetalletarea = $iddetalletarea",null);  
	return true;           
  }


}
?>

