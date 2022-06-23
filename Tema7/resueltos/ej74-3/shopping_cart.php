<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {//si hay metodo post

  if (isset($_POST['add'])) {//si el post es add (boton de comprar)

    if (isset($_SESSION['cart'][$_POST['add']])){//si existe la session['cart']['add'] que lleva por ejemplo raton

      $_SESSION['cart'][$_POST['add']]++;//añade a la session['cart']['value de add'] + 1 del raton;
    }
    else{   
      /** Inicializacion del carrito de compra y a su vez añadimos ese producto si no habia antes de el*/  
      $_SESSION['cart'][$_POST['add']]=1;
    }

    
  }
  else if (isset($_POST['substract'])) {

    if (isset($_SESSION['cart'][$_POST['substract']])){

      if ($_SESSION['cart'][$_POST['substract']]==1)//si solo hay 1 unidad del producto
        unset($_SESSION['cart'][$_POST['substract']]); //destruye esa variable de session 
      else
        $_SESSION['cart'][$_POST['substract']]--; //si hay mas de 1 unidad resta uno a la cantidad
      
    }

    
  }

  else if (isset($_POST['clear_cart'])) {
      unset($_SESSION['cart']);//destruye la session completa
  }
 
}
