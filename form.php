<?php
$_SERVER["REQUEST_METHOD"] == "POST"
$email=$_POST["email"];
$submit=$_POST["submit"];
$nombre=$_POST["nombre y mensaje"];

$mensaje="Este mensaje fue enviado por:".$nombre."\r\n";
$mensaje.="Su e-mail es:".$email."\r\n";
$mensaje.="Mensaje:".$_POST["nombre"]."\r\n";
$mensaje.="Enviado el:".date('d/n/y, time()');

$para="sacripantijc@gmail.com";
$asunto="mensaje de sitio web";

mail($para, $asunto, utf8_decode($mensaje),$header);
header("location:exito.html");
?>