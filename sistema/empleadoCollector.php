<?php

include_once('empleado.php');
include_once('Collector.php');

class EmpleadoCollector extends Collector
{
  
  function showEmpleados() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.empleado ");        
    $arrayEmpleado= array();        
    foreach ($rows as $c){
      $aux = new Empleado($c{'idempleado'},$c{'nombre'},$c{'apellido'},$c{'departamento'},$c{'cargo'});
      array_push($arrayEmpleado, $aux);
    }
    return $arrayEmpleado;        
  }

  function deleteEmpleado($idEmpleado) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.empleado where idempleado = '$idEmpleado'",null);   
    return true;          
  }

  function insertEmpleado($nombre, $apellido, $departamento, $cargo) {
    $rows = self::$db->insertRow("INSERT INTO controlAgricola.empleado (nombre, apellido, departamento, cargo) VALUES ('$nombre' , '$apellido', $departamento, $cargo )",null);             
	return true;
  }

  function updateEmpleado($idEmpleado, $nombre, $apellido, $departamento, $cargo) {
    $rows = self::$db->updateRow("UPDATE controlAgricola.empleado SET nombre = '$nombre', apellido = '$apellido', departamento = $departamento, cargo = $cargo WHERE idempleado ='$idEmpleado'",null);  
	return true;           
  }

}
?>

