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
});
