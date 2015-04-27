$(function(){
	
	getTableEventos();
	
	useAJAX("GET","response/coordinador.php",
			{opcion : "getPeriodosAcademicos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block' id='coordinador_boton_crear_siguiente_periodo'>Crear Siguiente Periodo</button>";
				$("#cont_coordinador_administrar_documentos").html((createTable(JSON.parse(data), "table_coordinador_administrar_periodos") + boton_crear ));
			}

	);
	
	$("#cont_coordinador_administrar_evento").delegate("#coordinador_boton_crear_evento","click",function(){
		console.log("Creando evento..........");
		useAJAX("GET","view/coordinador_form_evento.php",
			{opcion : "new_evento"},
			function(data){
				$("#cont_coordinador_administrar_evento").html(data);
			}
		);
	});

	$("#cont_coordinador_administrar_documentos").delegate("#coordinador_boton_crear_siguiente_periodo","click",function(){
		console.log("Creando siguiente periodo academico..........");
	});
	
	$("#cont_coordinador_administrar_evento").delegate("#form_evento_nuevo","submit", function( event ) {
		event.preventDefault();
		$('<input>').attr({
			type: 'hidden',
			name: 'opcion',
			value: 'new_evento'
		}).appendTo('#form_evento_nuevo');
		useAJAX("POST","request/coordinador.php",
			($(this).serialize()),
			function(data){
				console.log(data);
				alert("Se ha creado el evento exitosamente");
				getTableEventos();
			}
		);
	});

	$("#cont_coordinador_administrar_evento").delegate("#canelar_nuevo_evento","click",function(){
		getTableEventos();
	});


	console.log("coordinador");
});


function getTableEventos(){
	useAJAX("GET","response/coordinador.php",
		{opcion : "getEventos"},
			function(data){
				boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block' id='coordinador_boton_crear_evento'>Crear Evento</button>";
				$("#cont_coordinador_administrar_evento").html((createTable(JSON.parse(data),"table_coordinador_administrar_evento") + boton_crear ));
			}
		);
}