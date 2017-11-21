<?php
  session_start();
    unset($_SESSION['app_id'],$_SESSION['app_tipoU']);
    header('Location: login.php');
 ?>
