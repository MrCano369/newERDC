<?php

$user = $_GET['user'];
$code = $_GET['code'];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error1");
if(mysqli_query($con, "update usuarios set activado = '1' where user = '$user' and code = $code"))
    header('Location: ../inicio.html');
else
    echo "Fallo al autentificar";
?>