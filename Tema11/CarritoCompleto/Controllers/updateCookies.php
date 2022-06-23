<?php 

#Actualiza las cookies
function updateCookies(){
    setcookie('nick', $_SESSION['user']['nick'], strtotime("+1 week"));
    setcookie('type',$_SESSION['user']['type'], strtotime("+1 week"));
    setcookie('id',$_SESSION['user']['id'], strtotime("+1 week"));
}


?>