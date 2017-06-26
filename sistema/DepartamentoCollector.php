<?php

include_once('departamento.php');
include_once('Collector.php');

class DepartamentoCollector extends Collector
{
 
  function showdepartamentos() {
    $rows = self::$db->getRows("SELECT iddepartamento,nombre,estado FROM controlAgricola.departamento ");        
    $arraydepartamento= array();        
    foreach ($rows as $c){
      $aux = new departamento($c{'iddepartamento'},$c{'nombre'},$c{'estado'} );
      array_push($arraydepartamento, $aux);
    }
    return $arraydepartamento;        
  }

  function deletedepartamentos($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.departamento where iddepartamento = $id", null);             
  }

  function insertdepartamentos($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into controlAgricola.departamento (nombre, estado) values ('$nombre' , $estado )" , null);             
  }

  function updatedepartamentos($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update controlAgricola.departamento set nombre = '$nombre', estado = $estado where iddepartamento =$id", null);             
  }

}
?>

