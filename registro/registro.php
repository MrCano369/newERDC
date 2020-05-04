<?php

$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$code = rand(1000, 9999);

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error1");
if(mysqli_query($con, "insert into usuarios(name, email, pass, code) values('$user', '$email', '$pass', $code)")){

    $asunto = 'El Rincón de Cano - Confirmación de la cuenta';
    $msg = wordwrap("hola $user Haz click aqui: http://elrincondecano2.000webhostapp.com/new/registro/confirm.php?user=$user&code=$code",70);

    mail($email, $asunto, $msg);
    echo true;
}else
    echo false

?>