$(document).ready(function(){

	//Show the table of courses
	tableCourse();
	// Active event click for create a new course
	$(document).on("click","#data_send",createCourse);


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
	

	window.onload =
	function id_courses(){
		//In this block code, I get the id of courses and add click event for each selector a of edit class, all these is in table_model.php
		let edit = document.querySelectorAll('.edit');
		for(let i=0;i<edit.length;i++){
			//Add event click in each selector a of edit class
			$(document).on("click",`#${edit[i].id}`,function(){
				let my_id = edit[i].id;
				// To apply regex for return a string
				let digit = my_id.match(/\d+/g).join('');
				console.log(digit);
			});
		}

		//In this block code, I get the id of courses and add click event for each selector a of trash class, all these is in table_model.php
		let trash = document.querySelectorAll('.trash');
		for(let j=0;j<trash.length;j++){
			//Add event click in each selector a of trash class
			$(document).on("click",`#${trash[j].id}`,function(){
				let my_id = trash[j].id;
				// To apply regex for return a string
				let digit = my_id.match(/\d+/g).join('');
				// We call to deleteCourse() for deleteCourse
				deleteCourse(digit);
			})
		}
	};
	
	// This function delete a course
	function deleteCourse(id){
		let id_course = id;
		$.ajax({
			url:'/octopus/roles/administrador/php/delete_course.php',
			method:'POST',
			data:{id_course:id_course},
			success: function(response){
				tableCourse();
			},
			error: function(error){
				console.log("fallo con exito");
			}
		});
	}


});
