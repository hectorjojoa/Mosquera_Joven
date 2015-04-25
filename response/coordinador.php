<?php session_start();
	include_once("../handler/HandlerCoordinador.php");
	$handler_coordinador = new HandlerCoordinador();
	if (isset($_REQUEST['opcion'])){
		switch ($_REQUEST['opcion']) {
			case 'getEventos':
				print_r(json_encode($handler_coordinador->getEventos()));
			break;
			case 'getPeriodosAcademicos':
				print_r(json_encode($handler_coordinador->getPeriodosAcademicos()));
			break;
			default:
				echo "Coordinador sin opcion";
			break;
		}
	}
	$handler_coordinador->cerrarConexion();
?>