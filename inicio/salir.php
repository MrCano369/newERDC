<?php

setcookie("mail","",0);
echo "<script>
    localStorage.removeItem('user');
    location.href = 'inicioSesion.html';
</script>";

?>