<?php

require('initialize_shop.php');//importamos los productos
require('shopping_cart.php'); //importamos las funciones de carrito

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    img{width: 200px; height: 100px;}
  </style>
  <title>Cart Detail</title>

</head>

  <div class="container p-5">
    <div class="row">
      <div class='bg-dark border col-sm-12 py-5 text-info text-center'>Productos en tu Cesta</div>

    </div>
    <div class="row">

      <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Nombre</div>
      <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Cantidad</div>
      <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Precio</div>
      <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Accion</div>
    </div>
    <form action="" method="post" class="">
      <?php
      /** Homework to student turn this to session */
      $total_products = 0;
      $total_prices = 0;
      $total_qty = 0;

      if (isset($_SESSION['cart'])) {
        $total_products = count($_SESSION['cart']);

        foreach ($_SESSION['cart'] as $product => $qty) {//recorre el array de cart y suma
          $total_qty += $qty;
          $total_prices += $products[$product]['price'] * $qty;
          echo ("<div class='row'>        
    
  <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" . $product . "</div>     
  <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" .
            $qty .
            "</div>     
  <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'><img src='" .
            $products[$product]['image'] . "' /><br />" . $products[$product]['price'] .
            "</div>     
  <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>
  <button type='submit' class='btn btn-dark' name='substract' value='" . $product . "'>Eliminar</button>
  </div>     
</div>");
        }
      }

      echo ("<div class='row'>        
           
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>Total</div>     
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" . $total_qty . "</div>
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" . $total_prices . "</div>     
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>
      <button type='submit' class='btn btn-dark' name='clear_cart'>Vaciar Cesta</button>
      </div>     
    </div>");
      ?>
    </form>
    <div class='row'>

      <div class='bg-white border border-primary col-sm-12 py-2 text-center'>
        <a href="index.php" class='btn btn-light'>Volver a la Tienda</a>
      </div>
    </div>
  </div>
</body>

</html>