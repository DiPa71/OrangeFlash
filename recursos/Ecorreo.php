<?php 
//llamada a campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];
//correo
$destino = "orangeflash.soporte@gmail.com";
$asunto = "Contacto de Orangeflash";

$cuerpomensaje = "De: $nombre \nCorreo: $correo\nTelefono: $tel\n";
$cuerpomensaje .= "Mensaje: $mensaje";

//envio
mail($destino, $asunto, $cuerpomensaje);
header('Location: ../contacto.php?mensaje=enviado');
 ?>