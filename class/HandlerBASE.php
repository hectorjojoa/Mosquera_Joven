<?php
	include_once("../class/SQL.php");
	class HandlerBASE{

		private $conexion;

		public function __construct(){
			$this->conexion = new Query();
		}

		public function cerrarConexion(){
			$this->conexion->cerrarConexion();
		}


	}
?>