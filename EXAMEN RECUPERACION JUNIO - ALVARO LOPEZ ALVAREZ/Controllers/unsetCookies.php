<?php 

#Borra las cookies
function unsetCookies(){
    setcookie('user', null, -1);
    setcookie('id', null, -1);
}


?>