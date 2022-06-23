<?php
require('initialize_shop.php');
require('shopping_cart.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Ejercicio 7.4.3</title>
</head>

<div class="container p-5">
  <div class="row">
    <div class='bg-dark border col-sm-6 py-5 text-info text-center'>La Tiendecita</div>
    <div class='bg-dark border col-sm-6 py-5 text-info text-center'>
      <a href="cart_detail.php" class="text-decoration-none">
        Cesta <?php
              if (isset($_SESSION['cart'])) //cuenta los productos
                echo count($_SESSION['cart']);
              else echo "0";
              ?> Productos
      </a>
    </div>
  </div>
  <div class="row">
    <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Imagen</div>
    <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Nombre</div>
    <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Precio</div>
    <div class='bg-dark border col-sm-3 py-2 text-info text-center'>Accion</div>
  </div>
  <form action="" method="post" class="">
    <?php
    //products es global por eso podemos acceder desde aqui
    foreach ($products as $product => $detail) { //product array y detail == key
      echo ("<div class='row'>        
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'><img src='" . $detail['image'] . "' /></div>     
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" . $product . "</div>     
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>" . $detail['price'] . "</div>     
      <div class='bg-white border border-primary col-sm-3 py-2 text-dark text-center'>
      <button type='submit' class='btn btn-dark' name='add' value='" . $product . "'>Comprar</button> 
      </div>     
    </div>");
    }
    //en el submit el value es = al $producto (es el array) con el valor en concreto de ese nombre que lo usaremos en shopping_card.php con el $_POST['add'
    ?>
  </form>

</div>
</body>

</html>