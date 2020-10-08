<?php
    //esto es correo del destinatario
    $nombre = $_POST ['nombre'];
    $correo = $_POST ['email'];
    $mensaje = $_POST ['mensaje'];

    //Datos para el correo
    $destinatario = "moonassistantcontact@gmail.com"
    $asunto = "Enviado Desde Pagina MOON";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $correo \n";
    $carta .= "mensaje $mensaje";

    //Enviando Mensajes
    mail($destinatario, $asunto, $carta); 


    echo "<script>alert('Correo Enviado Correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
