<?php

include_once('cargo.php');
include_once('Collector.php');

class CargoCollector extends Collector
{
 
  function showcargos() {
    $rows = self::$db->getRows("SELECT idcargo,nombre,estado FROM controlAgricola.cargo ");        
    $arraycargo= array();        
    foreach ($rows as $c){
      $aux = new cargo($c{'idcargo'},$c{'nombre'},$c{'estado'} );
      array_push($arraycargo, $aux);
    }
    return $arraycargo;        
  }

  function deletecargos($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cargo where idcargo = $id", null);             
  }

  function insertcargos($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.cargo (nombre, estado) values ('$nombre' , $estado )" , null);             
  }

  function updatecargos($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.cargo set nombre = '$nombre', estado = $estado where idcargo =$id", null);             
  }

}
?>

