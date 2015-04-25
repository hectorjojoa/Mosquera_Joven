<?php
	include_once("../class/SQL.php");
	$conexion = new Query();
	$usuario = $conexion->getRowsQuery("view_usuarios_claves",array("correo","clave"), array($email,$password));
	$conexion->cerrarConexion();
?>