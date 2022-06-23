<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//echo $_SERVER['REQUEST_METHOD'];

  if (isset($_POST['submit_yes']) || isset($_POST['submit_no'])) {

    if (isset($_SESSION['votes'])) {
    
      if (isset($_POST['submit_yes']))
        $_SESSION['votes']['yes']++;

      elseif (isset($_POST['submit_no']))
        $_SESSION['votes']['no']++;
        
    } else {

      $_SESSION['votes']['yes'] = 0;
      $_SESSION['votes']['no'] = 0;

      if (isset($_POST['submit_yes']))
        $_SESSION['votes']['yes']++;
      elseif (isset($_POST['submit_no']))
        $_SESSION['votes']['no']++;      
    }
  }
  
}
