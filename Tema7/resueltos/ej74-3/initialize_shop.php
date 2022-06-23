<?php

global $products;

$products = [
  'raton'   =>['price'=>10,'image'=>'assets/images/raton.png'],
  'teclado' =>['price'=>20,'image'=>'assets/images/teclado.png'],
  'monitor' =>['price'=>30,'image'=>'assets/images/monitor.png'],
  'joystick'=>['price'=>50,'image'=>'assets/images/mando.png'],
];

if (session_status() == PHP_SESSION_NONE) {

  /** Inicializacion del tiempo de expiracion de la cookie */
  session_set_cookie_params(43200*60);

  /** Inicializacion del tiempo de expiracion de la session */
  ini_set('session.gc_maxlifetime', 43200*60);

  session_start();

}
