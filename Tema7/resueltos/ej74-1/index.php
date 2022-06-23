<?php
if ( session_status() == PHP_SESSION_NONE)
 session_start();
 
/** es el equivalente a import en otros lenguajes */
require('add_bg_color.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <title>Ejercicio 7.4.1</title>
</head>

<body style="background-color:<?php echo $bg_color; ?>">

  <div class="container p-5">
    <div class="row p-10 vh-100 justify-content-center">
      <div class="col-12">


        <form action="" method="post" class="bg-white d-flex justify-content-around py-5">
          <button name="submit_add_bg_color" type="submit" class="btn btn-danger">Añadir bg color</button>
          <button name="submit_show_palette" type="submit" class="btn btn-primary">Mostrar Paleta</button>
        </form>

         <a class="btn btn-dark" href="../index.php">Ir a Home</a>


      </div>
    </div>
  </div>
</body>

</html>