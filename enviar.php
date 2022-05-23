<?php
$nombre = $_POST['ayn'];
$mail = $_POST['mail'];
$comentarios = $_POST['comentario'];
$destinatario = "ecometto@hotmail.com";

$asunto = "Mail generado desde MiWeb - ";
$asunto .=  $mail . ' - ';

if (mail($destinatario, $asunto, $comentarios)) {
     echo "<script>alert('Solicitud enviada correctamente. En breve nos contactaremos con Ud. ');
          window.location='datos.html';</script>";
} else {
     echo "hubo un error";
}


