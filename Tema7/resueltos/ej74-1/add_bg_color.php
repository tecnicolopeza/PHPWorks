<?php

global $bg_color;

/** inicio del color aleatorio */

function random_color_part() {
  return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
  return '#'.random_color_part() . random_color_part() . random_color_part();
}

/** fin del color aleatorio */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_POST['submit_add_bg_color'])){

    $bg_color=random_color();
    
    if(isset($_SESSION['bg_colors'])) {

       $_SESSION['bg_colors'][]=$bg_color;
       
    }
    else{

      /** Si no existe el arreglo de colores en la sesion, lo inicializa */
      $_SESSION['bg_colors']=array($bg_color);
      
    }

  }
  elseif (isset($_POST['submit_show_palette'])){
    header("Location: show-palette.php");
    exit();
  }
  
  
}
