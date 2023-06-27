<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $mailTo = "enzoarielok@gmail.com";


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email". "\r\n";
    // $headers .= 'Cc: mail.com'

    $cuerpo = "
    <html>
    <body>
    <div style='background-color: aliceblue; border: 2px darkblue solid; padding: 1rem'>
    <p>Recibiste un mail de: $nombre $apellido</p>
    <p>Su email es: $email</p>
    <p>Turno solicitado el: $date</p>
    </div>
    </body>
    </html>
    ";

    // a quien, nombre, cuerpo, headers
    mail($mailTo, $nombre, $cuerpo, $headers);

    // redirecciono al usuario
    header("Location: enviado.html");


}


?>