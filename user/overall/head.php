<?php
include 'uconfig/core.php';

  if (!isset($_SESSION['app_id'])) {
    $mensaje = "<div class='logMsg-dang'><p>Debes de Iniciar Sesión</p></div>";
    header('Location: ../login.php?err='.$mensaje);
  } elseif ($_SESSION['app_tipoU'] != 2) {
    $mensaje = "<div class='logMsg-dang'><p>No tienes los permisos para entrar a esta sección.</p></div>";
    header('Location: ../login.php?err='.$mensaje);
  } 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../views/css/styles.css">
    <link href="https://file.myfontastic.com/YeUZkiShg37JRT8YsEPXLk/icons.css" rel="stylesheet">
    <title>Home</title>
</head>
