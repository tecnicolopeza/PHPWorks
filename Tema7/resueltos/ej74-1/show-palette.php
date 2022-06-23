<?php
if (session_status() == PHP_SESSION_NONE)
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

  <title>Show Palette</title>
</head>

<!--mejorar con bg click en el enlace del color--> 

<body style="background-color:<?php echo $bg_color; ?>">

  <div class="container p-5">
    <div class="row p-10 vh-100">
      <div class="col-12 d-flex flex-column align-items-center justify-content-center">

        <h5 class="text-success">
          Paleta de Colores
        </h5>
        <div class="container">

          <?php
          $cells = 6;//numero de celdas por linea de colores

          if (isset($_SESSION['bg_colors'])){

            $cell_counter = 0;

          
          for ($i = 0; $i < count($_SESSION['bg_colors']); $i++) {

            if ($cell_counter == 0 || $cell_counter == $cells) {
              echo "<div class='row'>";
            }

            $cell_counter++;
            echo ("<div class='col-sm-2 py-5 text-white text-center' style='background-color:" . $_SESSION['bg_colors'][$i] . "'>" . ($cell_counter) . "- {$_SESSION['bg_colors'][$i]}</div>");


            if ($cell_counter == $cells) {
              echo "</div>";
              $cell_counter = 0;
            }
          }
        }
          ?>
        </div>


      </div>
      <div class="col-12 d-flex flex-row align-items-start justify-content-between py-5">

        <a href="index.php" class="btn btn-danger">Añadir mas colores</a>
        <a href="destroy-session-colors.php" type="submit" class="btn btn-primary">Destruir Sesion</a>
        <a class="btn btn-dark" href="../index.php">Ir a Home</a>
      </div>
      
    </div>
  </div>
</body>

</html>