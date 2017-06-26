<?php

include_once('cabeceratarea.php');
include_once('Collector.php');

class CabeceraTareaCollector extends Collector
{
  
  function showTareas() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.cabeceratarea ");        
    $arrayTarea= array();        
    foreach ($rows as $c){
      $aux = new CabeceraTarea($c{'idcabeceratarea'},$c{'periodo'},$c{'fecha'},$c{'supervisor'},$c{'idcultivolote'},$c{'estado'});
      array_push($arrayTarea, $aux);
    }
    return $arrayTarea;        
  }

  function deleteTarea($idcabeceratarea) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cabeceratarea where idcabeceratarea = $idcabeceratarea",null);   
    return true;          
  }

  function insertTarea($idcabeceratarea, $periodo, $fecha, $supervisor, $idcultivolote, $estado) {
    $rows = self::$db->insertRow("INSERT INTO controlAgricola.cabeceratarea (idcabeceratarea, periodo, fecha, supervisor, idcultivolote, estado) VALUES ($idcabeceratarea, $periodo , '$fecha', $supervisor, $idcultivolote, $estado )",null);             
	return true;
  }

  function updateTarea($idcabeceratarea, $periodo, $fecha, $supervisor, $idcultivolote, $estado) {
    $rows = self::$db->updateRow("UPDATE controlAgricola.cabeceratarea SET periodo = $periodo, fecha = '$fecha', supervisor = $supervisor, idcultivolote = $idcultivolote, estado = $estado WHERE idcabeceratarea = $idcabeceratarea",null);  
	return true;           
  }

}
?>

