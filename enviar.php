<?php
$nombre=$_POST['nombre'];
$mail=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$header='From:' . $mail . "\r\n";
$header="X-Mailer:PHP/" . phpversion() .  "\r\n";
$header="Mime-Version:1.0  \r\n";
$header="Content-Type:text/plain";

$mensaje= "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje="Su e-mail es:" $mail . "\r\n";
$mensaje="Asunto" . $mail . "\r\n";
$mensaje="Teléfono" . $telefono . "\r\n";
$mensaje="Mensaje" . $_POST['mensaje'] . "\r\n";
$mensaje="Enviado el" . date('d/m/Y', time();

$para='oroborus.sol@gmail.com';
$asunto='Mensaje de mi Arrakis';

if (mail($para, $asunto, utf8_decode($mensaje), $header)
echo "<script type'text/javascript'>alert('tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='file:///C:/Users/Usuario/Desktop/pagina%20web%20arrakis/index.html'; </javascript";
?>