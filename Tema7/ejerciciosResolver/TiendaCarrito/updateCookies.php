<?php 

#Actualiza las cookies
function updateCookies(){
    setcookie('prodCart', serialize($_SESSION['prodCart']), strtotime("+1 week")); #serializo el carrito para meterlo a la cookie
    setcookie('total',$_SESSION['total'], strtotime("+1 week"));
    setcookie('precioTotal',$_SESSION['precioTotal'], strtotime("+1 week"));
}


?>