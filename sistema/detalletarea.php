<?php

class DetalleTarea{

	private $idcabeceratarea;
	private $iddetalletarea;
	private $idempleado;
	private $idlabor;
	private $cantidad;
	private $tarifa;

	function __construct($iddetalletarea, $idcabeceratarea, $idempleado, $idlabor, $cantidad, $tarifa){
		$this->iddetalletarea = $iddetalletarea;
		$this->idcabeceratarea = $idcabeceratarea;
		$this->idempleado = $idempleado;
		$this->idlabor = $idlabor;
		$this->cantidad = $cantidad;
		$this->tarifa = $tarifa;
	}

	function setIdcabeceratarea($idcabeceratarea){
		$this->idcabeceratarea = $idcabeceratarea;
	}

	function getIdcabeceratarea(){
		return $this->idcabeceratarea;
	}

	function setIddetalletarea($iddetalletarea){
                $this->iddetalletarea = $iddetalletarea;
        }

        function getIddetalletarea(){
                return $this->iddetalletarea;
        }

	function setIdempleado($idempleado){
                $this->idempleado = $idempleado;
        }

        function getIdempleado(){
                return $this->idempleado;
        }

	function setIdlabor($idlabor){
                $this->idlabor = $idlabor;
        }

        function getIdlabor(){
                return $this->idlabor;
        }

	function setCantidad($cantidad){
                $this->cantidad = $cantidad;
        }

        function getCantidad(){
                return $this->cantidad;
        }

	function setTarifa($tarifa){
                $this->tarifa = $tarifa;
        }

        function getTarifa(){
                return $this->tarifa;
        }

}

?>
