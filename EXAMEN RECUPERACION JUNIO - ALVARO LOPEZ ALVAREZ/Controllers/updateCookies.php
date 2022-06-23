<?php 

#Actualiza las cookies
function updateCookies(){
    setcookie('user', $_SESSION['user'], strtotime("+3 month"));
    setcookie('id', $_SESSION['id'], strtotime("+3 month"));
}


?>