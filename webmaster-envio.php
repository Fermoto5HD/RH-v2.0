<?php

$mensaje = "Hay un reporte de un error en el sitio.\n";

$mensaje.= "\nReportado por ". $_POST['nombre'] ." (".$_POST['email'].") \n";

$mensaje.= "\n---------------------\n";

$mensaje.= $_POST['mensaje'];

$mensaje.= "\n---------------------\n";

//En la siguiente linea ingresamos nuestra dirección de correo

$destino = "Fermoto5HD@outlook.com";

$remitente = $_POST['email'];

$asunto = "[Bug | Factor RH Creativo] Reporte de ".$_POST['nombre'];

mail($destino,$asunto,$mensaje, "From: $remitente");

//El mensaje que se mostrará al confirmar el envio

echo "¡Gracias por reportar este error!. <br><br>Importante: <br>El administrador del sitio podrá comunicarse con vos para solicitarte más detalles para la corrección del error reportado.";

?>