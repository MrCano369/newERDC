<?php

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error de conexión");
if($r = mysqli_fetch_array(mysqli_query($con, "select pass from usuarios where mail = '$mail'"))[0]){
    if($r == $pass) echo 1;
    else echo "contraseña errónea";
}else echo "El usuario no existe";
?>