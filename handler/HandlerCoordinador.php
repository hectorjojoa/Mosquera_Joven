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

		public function alterEvento($opcion,$id,$nombre,$descripcion,$fecha){
			switch ($opcion) {
				case 'new_evento':
					$opcion = 1;
					break;
				case 'edit_evento':
					$opcion = 2;
					break;
				default:
					echo "Otra opcion: ".$opcion;
					break;
			}
			$datos = array($id,$nombre,$descripcion,$opcion,$fecha);
			return $this->conexion->runStoredProcedure("SP_AlterEvento",1,$datos);
		}

		public function alterPeriodoAcademico($opcion, $valor){
			switch ($opcion) {
				case 'new_periodo_academico':
					//$opcion = 1;
					break;
					default:
					echo "Otra opcion: ".$opcion;
					break;
			}
			$datos = array(1,1,'prueba desde WEB');
			return $this->conexion->runStoredProcedure("SP_AlterPeriodoAcademico",1,$datos);
		}

		public function cerrarConexion(){
			$this->conexion->cerrarConexion();
		}


	}
?>