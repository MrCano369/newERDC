<?php

$mail = $_COOKIE["mail"];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error de conexión");

if ($obj = mysqli_fetch_array(mysqli_query($con, "select user, code from usuarios where mail = '$mail'"))) {
    $user = $obj["user"];
    $code = $obj["code"];
    $asunto = 'El Rincón de Cano - Confirmación de la cuenta';
    $msg = wordwrap("hola $user Haz click aqui: http://elrincondecano2.000webhostapp.com/new/inicio/activar.php?code=$code", 60);
    
    mail($mail, $asunto, $msg, "De: acano3@ucol.mx");
    header("Location: esperaActivacion.html");
}

?>