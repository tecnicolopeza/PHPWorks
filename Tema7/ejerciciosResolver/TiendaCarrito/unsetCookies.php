<?php 

#Actualiza las cookies
function unsetCookies(){
    setcookie('prodCart', null, -1);
    setcookie('total', null, -1);
    setcookie('precioTotal', null, -1);
}


?>