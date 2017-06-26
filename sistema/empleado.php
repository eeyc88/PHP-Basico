<?php

class Empleado{

	private $idEmpleado;
	private $nombre;
	private $apellido;
	private $departamento;
	private $cargo;

	function __construct($idEmpleado, $nombre, $apellido, $departamento, $cargo){
		$this->idEmpleado = $idEmpleado;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->departamento = $departamento;
		$this->cargo = $cargo;
	}

	function setIdEmpleado($idEmpleado){
		$this->idEmpleado = $idEmpleado;
	}

	function getIdEmpleado(){
		return $this->idEmpleado;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getApellido(){
		return $this->apellido;
	}

	function setDepartamento($departamento){
		$this->departamento = $departamento;
	}

	function getDepartamento(){
		return $this->departamento;
	}

	function setCargo($cargo){
		$this->cargo = $cargo;
	}

	function getCargo(){
		return $this->cargo;
	}


}
?>
