<?php

$mensaje = "Este mensaje proviene del sitio web de Factor RH Creativo. \n";

$mensaje.= "\nEscrito por ". $_POST['nombre'] ." (".$_POST['telefono']." | ".$_POST['email'].") \n";

$mensaje.= "\n---------------------\n";

$mensaje.= $_POST['mensaje'];

$mensaje.= "\n---------------------\n";

//En la siguiente linea ingresamos nuestra dirección de correo

$destino = "factorrhcreativo@gmail.com";

$remitente = $_POST['email'];

$asunto = "[Sitio Web] Mensaje de ".$_POST['nombre'];

mail($destino,$asunto,$mensaje, "From: $remitente");

//El mensaje que se mostrará al confirmar el envio

echo "Mensaje enviado. ¡Gracias por contactarnos, a la brevedad nos pondremos en contacto!";

?>