<?php

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error de conexión");
if($r = mysqli_fetch_array(mysqli_query($con, "select * from usuarios where mail = '$mail'"))){
    if($r['pass'] == $pass){
        setcookie("mail", $mail);
        echo json_encode($r);
    }
    else echo "Contraseña errónea";
}else echo "El usuario no existe";

?>