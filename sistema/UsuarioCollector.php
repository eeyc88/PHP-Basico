<?php

include_once('usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
 
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT idUsuario,nombre,clave FROM controlAgricola.usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'clave'} );
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($nombre,$clave) {
    $rows = self::$db->getRows("SELECT nombre, clave FROM controlAgricola.usuario where nombre = '$nombre' and clave = '$clave'");
    $arrayUser= array();
	foreach ($rows as $c){
	$aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'clave'});
	array_push($arrayUser, $aux);
	}
    return $arrayUser;
  }

  function deleteUsuarios($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.usuario where idUsuario = $id", null);             
	return true;
  }

  function insertUsuarios($nombre, $clave) {
    $rows = self::$db->insertRow("Insert into controlAgricola.usuario (nombre, clave) values ('$nombre' , '$clave' )" , null);             
	return true;
  }

  function updateUsuarios($id,$nombre, $clave) {
    $rows = self::$db->updateRow("Update controlAgricola.usuario set nombre = '$nombre', clave = '$clave' where idUsuario =$id", null);             
	return true;
  }

}
?>

