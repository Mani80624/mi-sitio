$(document).ready(function(){
	
	//This fuction return a table for courses
	function tableCourse(){
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
	tableCourse();

	// Active event click for create a new course
	$(document).on("click","#data_send",createCourse);

	//This function creates new course, send information to create_courses.php
	function createCourse(){
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
				tableCourse();
			},
			error: function(error){
				console.log("Error de conexión");
			}
		});		
	}

	$(document).on("click","#button-hide",editFunction);
	
	function editFunction(){
		console.log("Precionaste el botón edit course");
	}
});