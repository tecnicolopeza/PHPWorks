<?php
if (session_status() == PHP_SESSION_NONE){  
  session_set_cookie_params(30);
  session_start();
}

require('count_votes.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Ejercicio 7.4.2</title>
</head>

<body style="background-color:<?php echo $bg_color; ?>">

  <div class="container p-5">
    <div class="row p-10">
      <div class="col-12 d-flex flex-column">

<h5 class="text-center">¿Crees que actualmente hay corrupción en el gobierno?</h5>

        <form action="" method="post" class="py-5 d-flex justify-content-around">
          <button name="submit_yes" type="submit" class="btn btn-danger">Si</button>
          <button name="submit_no" type="submit" class="btn btn-primary">No</button>
        </form>


      </div>
    </div>
    
    <div class='row'>
      <p>
        <span class="text-green">YES 
       <?php
       if (isset($_SESSION['votes']['yes'])){
       for ($i=1; $i <=$_SESSION['votes']['yes'] ; $i++) {          
         echo (" <i class=\"fas fa-thumbs-up\" style='color:green;'></i> ");
       }
      
           echo "({$_SESSION['votes']['yes']})"; 
      }
           ?> 
         
           
        </span>
      </p>
    </div>
    <div class='row'>
    <p>
    <span class="text-red">NO  
    <?php
    if (isset($_SESSION['votes']['no'])){
       for ($i=1; $i <=$_SESSION['votes']['no'] ; $i++) {          
         echo (" <i class=\"fas fa-thumbs-down\" style='color:red;'></i> ");
       }
       
           echo "({$_SESSION['votes']['no']})"; 
      }
           ?>
        </span>
      </p>
      <div class="row p-10">
        <div class="col-2 d-flex flex-column ">
          <a href="session_destroy.php" type="submit" class="btn btn-primary">Destruir Sesion</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>