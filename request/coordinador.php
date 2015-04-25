<?php session_start();
	include_once("../handler/HandlerCoordinador.php");
	$handler_coordinador = new HandlerCoordinador();
	if (isset($_REQUEST['opcion'])){
		witch ($_REQUEST['opcion']) {
			case 'newEvento':
				echo "Creando nuevo evento.";
			break;
			default:
				echo "Coordinador sin opcion";
			break;
		}		
	}
	$handler_coordinador->cerrarConexion();
?>