<?php session_start();
	include_once("../handler/HandlerEstudiante.php");
	$handler_estudiante = new HandlerEstudiante();
	if (isset($_REQUEST['opcion'])){
		switch ($_REQUEST['opcion']) {
			case 'getTodosDatosPersona':
				print_r(json_encode($handler_estudiante->getDatosPersona($_SESSION["usuario"]["numero_documento"])));
			break;
			case 'getTodosDocumentosPersona':
				print_r(json_encode($handler_estudiante->getDocumentosPersona($_SESSION["usuario"]["numero_documento"])));
			break;
			case 'getTodosEventosPersona':
				print_r(json_encode($handler_estudiante->getEventosPersona($_SESSION["usuario"]["numero_documento"])));
			break;
			default:
				echo "Estudiante sin opcion";
			break;
		}
	}
	$handler_estudiante->cerrarConexion();
?>