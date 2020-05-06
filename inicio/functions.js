function enviarCorreo(){
    let obj = JSON.parse(localStorage.getItem('user'));
    fetch('enviarCorreo.php', {method: "POST", headers: {'Content-Type':'application/x-www-form-urlencoded'}, body: `user=${obj.user}&mail=${obj.mail}`});
}