<?php session_start();
	include_once("../handler/HandlerCoordinador.php");
	$handler_coordinador = new HandlerCoordinador();
	if (isset($_REQUEST['opcion'])){
		switch ($_REQUEST['opcion']) {
			case 'new_evento':
				return $handler_coordinador->alterEvento($_REQUEST['opcion'],1,$_REQUEST['nombre_evento_nuevo'],$_REQUEST['descripcion_evento_nuevo'],$_REQUEST['fecha_evento_nuevo']);
			break;
			default:
				echo "Coordinador sin opcion";
			break;
		}		
	}
	$handler_coordinador->cerrarConexion();
?>