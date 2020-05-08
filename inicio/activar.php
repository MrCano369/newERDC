<?php

$mail = $_COOKIE["mail"];
$code = $_GET['code'];

$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error de conexión");
if(mysqli_fetch_array(mysqli_query($con, "select count(*) from usuarios where mail = '$mail' and code = $code"))[0]){
    if(mysqli_query($con, "update usuarios set active = 1 where mail = '$mail' and code = $code")){
        echo "<script>
            let x = JSON.parse(localStorage.getItem('user'));
            x.active = 1;
            localStorage.setItem('user', JSON.stringify(x));
            location.href = 'index.html';
            </script>";
    }
}else echo "Fallo al autentificar";
?>