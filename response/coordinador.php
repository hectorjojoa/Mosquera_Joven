<?php session_start();
	include_once("../handler/HandlerCoordinador.php");
	$handler_coordinador = new HandlerCoordinador();
	if (isset($_REQUEST['opcion'])){
		switch ($_REQUEST['opcion']) {
			case 'getEventos':
				eventosToTable($handler_coordinador->getEventos());
			break;
			case 'getPeriodosAcademicos':
				periodosToTable($handler_coordinador->getPeriodosAcademicos());
			break;
			default:
				echo "Coordinador sin opcion";
			break;
		}
	}
	$handler_coordinador->cerrarConexion();

	function eventosToTable($evento){
		$return = "<table class='table'>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Fecha</th>
				<th>Opciones</th>
			</tr>";
		for($i = 0; $i < sizeof($evento); $i++){
			$return .= "
			<tr>
				<td>".$evento[$i]['nombre']."</td>
				<td>".$evento[$i]['descripcion']."</td>
				<td>".$evento[$i]['fecha']."</td>
				<td><a href='#editar_evento_".$evento[$i]['id']."'>editar</a></td>
			</tr>";
		}
		$return .= "</table>";
		echo $return;
	}

	function periodosToTable($periodo){
		$return = "<table class='table'>
			<tr>
				<th>Periodo</th>
				<th>Opciones</th>
			</tr>";
		for($i = 0; $i < sizeof($periodo); $i++){
			$return .= "
			<tr>
				<td>".$periodo[$i]['nombre']."</td>
				<td><a href='#editar_periodo_".$periodo[$i]['id']."'>habilitar</a></td>
			</tr>";
		}
		$return .= "</table>";
		echo $return;
	}
?>