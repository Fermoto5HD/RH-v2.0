function EnvioCorreo(){
    $("#correo-enviar").attr("disabled", true);
    $('.correo-error').css("display","none");  
    $(".correo-error-item").remove();
 
    var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
    var s_email = $('#campo-correo').val();
    var s_name = $('#campo-nombre').val();  
    var valor_telefono = $('#campo-telefono').val();   
    var s_msg = $('#campo-mensaje').val();
 

    if (s_msg.length == 0 ){
        $('.correo-error').css("display","block");  
        $('.correo-error-titulo').after("<div class='correo-error-item'>Faltó ingresar el contenido del mensaje.</div>");
        var sendMail = "false";
    }

    if (filter.test(s_email)){
        sendMail = "true";
    } 
    else if (s_email.length == 0 ) {
        $('.correo-error').css("display","block");  
        $('.correo-error-titulo').after("<div class='correo-error-item'>Faltó ingresar la dirección de correo.</div>");
        sendMail = "false";
    }
    else{
        $('.correo-error').css("display","block");  
        $('.correo-error-titulo').after("<div class='correo-error-item'>El correo ingresado no es válido.</div>");
        sendMail = "false";
    }

    if (valor_telefono.length == 0 ){
        $('.correo-error').css("display","block");  
        $('.correo-error-titulo').after("<div class='correo-error-item'>Faltó ingresar el telefono.</div>");
        var sendMail = "false";
    }

    if (s_name.length == 0 ){
        $('.correo-error').css("display","block");  
        $('.correo-error-titulo').after("<div class='correo-error-item'>Faltó ingresar el nombre.</div>");
        var sendMail = "false";
    }
 
   
    if(sendMail == "true"){
    
     var datos = {
 
            "nombre" : $('#campo-nombre').val(),

            "telefono" : $('#campo-telefono').val(),

            "email" : $('#campo-correo').val(),
 
            "mensaje" : $('#campo-mensaje').val()
 
     };
 
     $.ajax({
 
             data:  datos,
             // Levanta el archivo interno de proceso
             url:   'contacto-envio.php',
 
             type:  'post',
 
             beforeSend: function () {
                    $("#correo-enviar").val("Espere... enviando correo");
 
             },
 
             success:  function (response) {
 
                    $('form')[0].reset();
                    $("#correo-enviar").val("Enviar");
                    $("#correo-informacionenviado p").html(response);
                    $("#correo-informacionenviado").fadeIn('slow');
                    $("#correo-enviar").removeAttr("disabled");
                    
 
 
             }
 
     });
 
} else{
    $("#correo-enviar").removeAttr("disabled");
}
 
}