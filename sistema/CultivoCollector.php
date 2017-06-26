<?php

include_once('cultivo.php');
include_once('Collector.php');

class CultivoCollector extends Collector
{
 
  function showCultivos() {
    $rows = self::$db->getRows("SELECT idcultivo,nombre,estado FROM controlAgricola.cultivo ");        
    $arrayCultivo= array();        
    foreach ($rows as $c){
      $aux = new Cultivo($c{'idcultivo'},$c{'nombre'},$c{'estado'} );
      array_push($arrayCultivo, $aux);
    }
    return $arrayCultivo;        
  }

  function deleteCultivos($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cultivo where idcultivo = $id", null);             
  }

  function insertCultivos($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.cultivo (nombre, estado) values ('$nombre' , $estado )" , null);             
  }

  function updateCultivos($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.cultivo set nombre = '$nombre', estado = $estado where idcultivo =$id", null);             
  }

}
?>

