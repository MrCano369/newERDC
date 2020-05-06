<?php

$user = $_POST['user'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$code = rand(1000, 9999);

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error1");
mysqli_query($con, "insert into usuarios(user, mail, pass, code) values('$user', '$mail', '$pass', $code)") or die(false);
echo true;

?>