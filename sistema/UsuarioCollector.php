<?php

include_once('usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
 
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT idusuario,nombre,clave FROM controlAgricola.usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'} );
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($nombre, $clave) {
    $rows = self::$db->getRow("SELECT idusuario,nombre,clave FROM controlAgricola.usuario where idusuario = $id");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'} );
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function deleteUsuarios($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.usuario where idusuario = $id", null);             
  }

  function insertUsuarios($nombre, $clave) {
    $rows = self::$db->insertRow("Insert into controlAgricola.usuario (nombre, clave) values ('$nombre' , '$clave' )" , null);             
  }

  function updateUsuarios($id,$nombre, $clave) {
    $rows = self::$db->updateRow("Update controlAgricola.usuario set nombre = '$nombre', clave = '$clave' where idusuario =$id", null);             
  }

}
?>

