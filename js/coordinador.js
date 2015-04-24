$(function(){
	useAJAX("GET","response/coordinador.php",
			{opcion : "getEventos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block'>Crear Evento</button>";
				$("#cont_coordinador_administrar_evento").html((createTable(JSON.parse(data)) + boton_crear ));
			}

	);
	useAJAX("GET","response/coordinador.php",
			{opcion : "getPeriodosAcademicos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block'>Crear Siguiente Periodo</button>";
				$("#cont_coordinador_administrar_documentos").html((createTable(JSON.parse(data)) + boton_crear ));
			}

	);
	console.log("coordinador");
});