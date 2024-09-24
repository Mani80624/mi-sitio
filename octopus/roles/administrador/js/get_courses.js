$(document).ready(function(){
	function queryAjax(){
		$.ajax({
			url:'/octopus/roles/administrador/php/table_model.php',
			method: "POST",
			success: function(response){
				$("#table_async").html(response);
			},
			error:function(error){
				console.log("Error en la conexión");
			}
		});
	}
	queryAjax();

	$(document).on("click","#data_send",function(){
		let name_course = $("#name_course").val();
		let hours = $("#hours").val();
		let description = $("#description").val();

		$.ajax({
			url:'/octopus/roles/administrador/php/create_courses.php',
			method: 'POST',
			data: {name_course: name_course, 
				hours: hours, 
				description:description},
			success: function(data){
				console.log("Estamos dentro");
			},
			error: function(error){
				console.log("Error de conexión");
			}
		});

	});
});