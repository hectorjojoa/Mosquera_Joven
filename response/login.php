<?php
	if(validarIngreso($_GET["email"],$_GET["password"])){
		echo "1";
	}else{
		echo "0";
	}
	
	function validarIngreso($email,$password){
		include_once("../handler/HandlerLogin.php");
		if(isset($usuario[0])){
			iniciarSession($usuario);
			return true;
		}else{
			return false;
		}
	}

	function iniciarSession ($usuario){
		session_start("usuario");

		$_SESSION["usuario"] = $usuario[0];

	}
?>