$(function(){
	useAJAX("GET","response/estudiante.php",
			{opcion : "getTodosDocumentosPersona"},
			function(data){
				$("#cont_estudiante_administrar_informacion").html(createTable(JSON.parse(data),"tabla_admin_informacion_estudiante"));
			}

	);
	useAJAX("GET","response/estudiante.php",
			{opcion : "getTodosDatosPersona"},
			function(data){
				$("#cont_estudiante_administrar_documentos").html(createTable(JSON.parse(data),"tabla_admin_documentos_estudiante"));
			}

	);
	useAJAX("GET","response/estudiante.php",
			{opcion : "getTodosEventosPersona"},
			function(data){
				$("#cont_estudiante_gestion_eventos").html(createTable(JSON.parse(data),"tabla_gestion_eventos_estudiante"));
			}
	);
});