<?php

$user = $_POST['user'];
$mail = $_POST['mail'];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error1");
$r = mysqli_query($con, "select code from usuarios where user = '$user'") or die(false);

if ($code = mysqli_fetch_array($r)[0]) {
    $asunto = 'El Rincón de Cano - Confirmación de la cuenta';
    $msg = wordwrap("hola $user Haz click aqui: http://elrincondecano2.000webhostapp.com/new/registro/confirm.php?user=$user&code=$code", 60);
    if(mail($mail, $asunto, $msg))
        echo "Enviado";
}

?>