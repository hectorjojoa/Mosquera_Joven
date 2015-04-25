$(function(){

	$('#tab_menu a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
	
	$("#administrar_estudiante").on("click",function(){
		useAJAX("GET","response/administrador.php",{opcion : "getAllPerson"},
			function(data){
				$("#container").html(data);
			}
		);
	});
	
	$("#form_login").submit(function(){
		useAJAX( "GET","response/login.php",$(this).serialize(),
			function (data){
				console.log(data);
				if(data == 1){
					window.location = "index.php";
				}else{
					alert("Usuario NO valido");
				}
			}
		);
		event.preventDefault();
	});

	$("#cerrar_session").on("click",function(){
		useAJAX( "GET","response/logout.php","",
			function(data_recibida){
				console.log(data_recibida);
				window.location = "index.php";
			}
		);
	});

	$("#container").delegate(".registro","click",function(){
		useAJAX("GET","response/registro.php","",
				function(data){
					$("#container").html(data);
				}

		);
	});

});

function useAJAX(metodo,url,data,function_success){
	$.ajax({
			method : metodo,
			url : url,
			data: data,
			success : function_success
		})
}

function createTable(data, id_table){
	table_html = "<table class='table table-striped' id='" + id_table + "'>";
		$.each(data, function(i, item) {
    		table_html += "<tr>";
    			$.each(item,function(a,b){
    				if(!$.isNumeric(a))
    					table_html += "<td>" + b + "</td>";
    			});
    		table_html += "</tr>";
    	});
	table_html += "</table>";
	return table_html;
}