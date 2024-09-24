$(document).ready(function(){
    $("#button-register").click(function(){
        $("#register-course").show(500);
    });
    $("#cancelar-form").click(function(){
        $("#register-course").hide(500);
    });
    $("#courses_form").validate({
        rules:{
            name_course:{
                required:true
            },
            hours:{
                required:true
            },
            description:{
                required:true,
                maxlength:250
            }
        },
        messages:{
            name_course:{
                required:"Por favor escribe el nombre del curso que impartiras"
            },
            hours:{
                required:"Por favor escribe cuanto tiempo dura tu curso"
            },
            description:{
                required:"Por favor escribe de que trata tu curso",
                maxlength:"Ingresa una descirpción de menos de 250 carácteres"
            }
        }
    });

    $("#courses_form").on('submit',function(event){
        event.preventDefault();

        let datosFormulario = $(this).serialize();

        $.ajax({
            url: "/octopus/roles/administrador/php/create_courses.php",
            type: "POST",
            data: datosFormulario,
            success: function(response){
                $("#success").html(`
                    <div class="alert alert-success">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				        <strong>Se ha creado un nuevo curso ${response}</strong>
			        </div>`
                );
            },
            error: function(error){
                $("#success").html(`
                    <div class="alert alert-danger">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				        <strong>Ha ocurrido un error intenta nuevamente</strong>
			        </div>`);
            }
        });
    });
});
