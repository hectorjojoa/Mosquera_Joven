<?php
	include_once("../class/SQL.php");
	class HandlerCoordinador{

		private $conexion;

		public function __construct(){
			$this->conexion = new Query();
		}

		public function getEventos(){
			return $this->conexion->getTable('evento', 'fecha', 2);
		}

		public function getPeriodosAcademicos(){
			return $this->conexion->getTable('semestre', 'id', 2);
		}

		public function cerrarConexion(){
			$this->conexion->cerrarConexion();
		}

	}
?>