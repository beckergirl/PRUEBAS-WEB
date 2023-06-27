<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$empresa = $_POST["mensaje"];

$header = "From: " . $mail . " \r\n ";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n ";
$header = "Mine-Version: 1.0 \r\n ";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " ,\r\n ";
$mensaje = "Su e-mail es: " . $email . " \r\n ";
$mensaje = "Mensaje: " . $POST["mensaje"] . " \r\n ";
$mensaje = "Enviado el " .date("d/m/Y" , time());

$para = "ibecker.art@gmail.com";
$asunto = "Asunto: web Irene Becker Studio";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Locatio:index.html");
?>



