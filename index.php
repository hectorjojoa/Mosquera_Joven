<?php session_start();
	error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mosquera Joven</title>
	<script src="js/jquery-2.1.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estiloBanner.css">
	<script type="text/javascript" src="js/index.js"></script>
	

	<!-- SCRIPTS PARA EL FUNCIONAMIENTO DE LOS INCLUDE -->
		<?php
			if($_SESSION["usuario"]["rol"] == "coordinador"){
				echo '<script type="text/javascript" src="js/coordinador.js"></script>';
			}else if($_SESSION["usuario"]["rol"] == "estudiante"){
				echo '<script type="text/javascript" src="js/estudiante.js"></script>';
			}
		?>
	<!--  FIN  -->

</head>
<body>
	<header  class="header">
		<div id="banner" class="col-xs-12">
			<img  src="images/img_plataforma/logo_alcaldia.png"  id="img_banner">asd
		</div>
		<br/>
		<div align = "center">
			<br />
			<?php
				if(isset($_SESSION["usuario"])){
					echo "
						<label><h1>Bienvenido : ".$_SESSION["usuario"]["nombre"]." </h1></label>
						<button id='cerrar_session' class='btn btn-lg btn-warning btn-block'>Cerrar Session</button>
					";
					if($_SESSION["usuario"]["rol"] == "estudiante"){
						include_once("view/menu_estudiante.php");
					}else if ($_SESSION["usuario"]["rol"] == "coordinador"){
						include_once("view/menu_coordinador.php");
					}
				}
			?>
		</div>
	</header>
	<div class="row" id="container_principal">
		<div class="col-xs-3">
			<img src="images/img_plataforma/log.png" id="img_banner">
		</div>
		<section class="col-xs-12 col-md-5">
			<article>
				<div id="container">
					<?php
						if(!isset($_SESSION["usuario"])){
							include_once("view/login.php");
						}
						else{
							if($_SESSION["usuario"]["rol"] == "estudiante"){
								include_once("view/contenido_estudiante.php");
							}else if ($_SESSION["usuario"]["rol"] == "coordinador"){
								include_once("view/contenido_coordinador.php");
							}
						}
					?>
				</div>
			</article>
		</section>
	</div>
	<br/>
	<footer id="pie" align="center">
		<div class="container">
			<p aling=<"center">hector jojoa</p>
			<p aling=<"center">Teléfono: (57+1) 8424822 Fax:(57+1) 8424822 EXT. 118 Correo electrónico: contactenos@facatativa-cundinamarca.gov.co Dirección: Cra 3 No. 5-68 -Parque Principal (Facatativá-Cundinamarca) </p>
			<p aling=<"center">Horario de atención: Lunes a Viernes de 8:00 a.m - 12:00 y 2:00 p.m - 5:00 p.m </p>
			<div class="social">
				<a href="https://www.facebook.com/pages/Mosquera-Joven/259074397570611?fref=ts" target="_blank"><span class="icon2"></span></a>
				<a href="https://twitter.com/mosquera_joven" target="_blank"><span class="icon3"></span></a>
				<a href="https://www.youtube.com/channel/UCiaxsOdN6NMxAzd4lLFnl1w" target="_blank"><span class="icon4"></span></a>
			</div>
		</div>	 
	</footer>
</body>
</html>