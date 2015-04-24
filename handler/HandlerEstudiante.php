<?php
	include_once("../class/SQL.php");
	class HandlerEstudiante{

		private $conexion;

		public function __construct(){
			$this->conexion = new Query();
		}

		public function getDatosPersona($numero_documento){
			return $this->conexion->getTable('view_estudiante_datos_persona', 'periodo_academico', 2);
		}

		public function getDocumentosPersona($numero_documento){
			return $this->conexion->getTable('view_estudiante_documentos_persona', 'periodo_academico', 2);
		}

		public function getEventosPersona($numero_documento){
			return $this->conexion->getTable('view_estudiante_eventos', 'fecha_evento', 2);
		}

		public function cerrarConexion(){
			$this->conexion->cerrarConexion();
		}

	}
?>