<?php

include_once('lote.php');
include_once('Collector.php');

class LoteCollector extends Collector
{
  
  function showLote() 
  {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.lote ");        
    $arrayLote= array();        
    foreach ($rows as $c){
      $aux = new Lote($c{'idlote'},$c{'idarea'},$c{'nombre'},$c{'tamano'},$c{'estado'});
      array_push($arrayLote, $aux);
    }
    return $arrayLote;        
  }

  function deleteLote($id) 
  {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.lote where idlote = $id", null);             
  }

  function insertLote($idarea, $nombre, $tamano, $estado) 
  {
    $rows = self::$db->insertRow("Insert into controlAgricola.lote (idarea, nombre, tamano, estado) values ($idarea ,'$nombre' , $tamano , $estado )" , null);             
  }
 
 function updateLote($id, $idarea, $nombre, $tamano, $estado) 
 {
    $rows = self::$db->updateRow("Update controlAgricola.lote set idarea=$idarea, nombre = '$nombre', tamano = $tamano, estado = $estado where idlote =$id", null);             
 }
 
}
?>
