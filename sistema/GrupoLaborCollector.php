<?php

include_once('grupoLabor.php');
include_once('Collector.php');

class GrupoLaborCollector extends Collector
{
 
  function showgrupoLabors() {
    $rows = self::$db->getRows("SELECT idgrupolabor,nombre,estado FROM controlAgricola.grupoLabor ");        
    $arraygrupoLabor= array();        
    foreach ($rows as $c){
      $aux = new GrupoLabor($c{'idgrupolabor'},$c{'nombre'},$c{'estado'} );
      array_push($arraygrupoLabor, $aux);
    }
    return $arraygrupoLabor;        
  }

  function deletegrupoLabors($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.grupoLabor where idgrupoLabor = $id", null);             
  }

  function insertgrupoLabors($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.grupoLabor (nombre, estado) values ('$nombre' , $estado )" , null);             
  }

  function updategrupoLabors($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.grupoLabor set nombre = '$nombre', estado = $estado where idgrupolabor =$id", null);             
  }

}
?>

