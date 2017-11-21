<?php
require_once 'config/core.php';

  if (isset($_SESSION['app_id']) and $_SESSION['app_tipoU'] == 2) {
    header('Location: '.URL.'user/');
  } elseif ($_SESSION['app_tipoU'] == 1) {
    header('Location: '.URL.'admin/');
  } else {
    header('Location: '.URL.'login.php');
  }

 ?>
