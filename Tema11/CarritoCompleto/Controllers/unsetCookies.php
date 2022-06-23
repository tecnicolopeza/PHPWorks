<?php 

#Borra las cookies
function unsetCookies(){
    setcookie('nick', null, -1);
    setcookie('type', null, -1);
    setcookie('id', null, -1);
}


?>