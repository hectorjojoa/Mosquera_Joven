$(function(){
	
	useAJAX("GET","response/coordinador.php",
			{opcion : "getEventos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block' id='coordinador_boton_crear_evento'>Crear Evento</button>";
				$("#cont_coordinador_administrar_evento").html((createTable(JSON.parse(data),"table_coordinador_administrar_evento") + boton_crear ));
			}

	);
	
	useAJAX("GET","response/coordinador.php",
			{opcion : "getPeriodosAcademicos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block' id='coordinador_boton_crear_siguiente_periodo'>Crear Siguiente Periodo</button>";
				$("#cont_coordinador_administrar_documentos").html((createTable(JSON.parse(data), "table_coordinador_administrar_periodos") + boton_crear ));
			}

	);
	
	$("#cont_coordinador_administrar_evento").delegate("#coordinador_boton_crear_evento","click",function(){
		console.log("Creando evento..........");
	});

	$("#cont_coordinador_administrar_documentos").delegate("#coordinador_boton_crear_siguiente_periodo","click",function(){
		console.log("Creando siguiente periodo academico..........");
	});

	console.log("coordinador");
});