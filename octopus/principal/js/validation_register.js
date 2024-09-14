$(document).ready(function(){
    $("#formulario").validate({
        rules:{
            name:{
                required:true
            },
            email:{
                required:true,
                email: true
            },
            pwd:{
                required:true,
                minlength: 8
            },
            pwd_confirm:{
                required: true,
                equalTo:"#pwd"
                
            }
        },
        messages:{
            name:{
                required: "Por favor ingresa un nombre"
            },
            email:{
                required:"Por favor ingrese un email",
                email:"Por favor ingrese un email válido"
            },
            pwd:{
                required:"Por favor ingrese una contraseña",
                minlength:"Ingrese una contraseña de almenos 8 caracteres"
            },
            pwd_confirm:{
                required:"Por favor ingresa la misma contraseña",
                equalTo:"Las contraseñas no coinciden"
            }
        }
    });

    $("#signing").validate({
        rules:{
            email:{
                required:true,
                email:true
            },
            pwd:{
                required:true,
                minlength: 8
            }
        },
        messages:{
            email:{
                required:"Por favor ingresa el email",
                email:"Ingresa con el formato correcto"
            },
            pwd:{
                required:"Por favor ingresa una contraseña",
                minlength:"Ingresa la contraseña de al menos 8 carácteres"
            }
        }
    });

    $("#formUpdate").validate({
        rules:{
            first_name:{
                required:true
            },
            last_name:{
                required:true
            },
            pwd:{
                required:true,
                minlength:8
            },
            pwd_confirm:{
                required:true,
                equalTo:"#profileNewPassword"
            }
        },
        messages:{
            first_name:{
                required:"Por favor ingrese un nombre"
            },
            last_name:{
                required:"Por favor ingrese sus apellidos"
            },
            pwd:{
                required:"Por favor ingrese una contraseña",
                minlength:"Ingresa una contraseña de almenos 8 caracteres"
            },
            pwd_confirm:{
                required:"Por favor ingrese una contraseña",
                equalTo:"Las contraseñas no coinciden"
            }
        }
    });
});