<?php
  session_start();
    unset($_SESSION['app_id'],$_SESSION['app_tipoU']);
    session_destroy();
    header('Location: ../login.php');
 ?>
