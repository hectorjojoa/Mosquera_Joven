$(function(){
	
	getTableEventos();
	
	getTablePeriodosAcademicos();
	
	$("#cont_coordinador_administrar_evento").delegate("#coordinador_boton_crear_evento","click",function(){
		useAJAX("GET","view/coordinador_forms.php",
			{opcion : "new_evento"},
			function(data){
				$("#cont_coordinador_administrar_evento").html(data);
			}
		);
	});

	$("#cont_coordinador_administrar_documentos").delegate("#coordinador_boton_crear_siguiente_periodo","click",function(){
		console.log("Creando siguiente periodo academico..........");
		useAJAX("GET","view/coordinador_forms.php",
			{opcion : "new_periodo_academico"},
			function(data){
				$("#cont_coordinador_administrar_documentos").html(data);
			}
		);
	});
	
	/**
	*
	*	seccion de eventos EVENTO
	*	1. Crear un nuevo evento
	*	2. Cancelar creacion de nuevo evento
	*
	**/

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

	$("#cont_coordinador_administrar_evento").delegate("#cancelar_nuevo_evento","click",function(){
		getTableEventos();
	});

	/**
	*
	*	seccion de eventos PERIODO ACADEMICO
	*	1. Crear un nuevo periodo academico
	*	2. Cancelar creacion de nuevo periodo academico
	*
	**/

	$("#cont_coordinador_administrar_documentos").delegate("#form_periodo_academico_nuevo","submit", function( event ) {
		event.preventDefault();
		$('<input>').attr({
			type: 'hidden',
			name: 'opcion',
			value: 'new_periodo_academico'
		}).appendTo('#form_periodo_academico_nuevo');
		useAJAX("POST","request/coordinador.php",
			($(this).serialize()),
			function(data){
				console.log(data);
				alert("Se ha creado el nuevo periodo academico exitosamente");
				getTablePeriodosAcademicos();
			}
		);
	});

	$("#cont_coordinador_administrar_documentos").delegate("#cancelar_nuevo_periodo_academico","click",function(){
		getTablePeriodosAcademicos();
	});

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

function getTablePeriodosAcademicos(){
	useAJAX("GET","response/coordinador.php",
		{opcion : "getPeriodosAcademicos"},
		function(data){
			boton_crear = "<br /><button class='btn btn-lg btn-primary btn-block' id='coordinador_boton_crear_siguiente_periodo'>Crear Siguiente Periodo</button>";
			$("#cont_coordinador_administrar_documentos").html((createTable(JSON.parse(data), "table_coordinador_administrar_periodos") + boton_crear ));
		}

	);
}