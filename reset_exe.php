<?php
require_once 'config/core.php';

if(!isset($_SESSION['app_id']) and isset($_GET['key'])) {
  $conexion = new Conexion();
  $keypass = $_GET['key'];
  $sql = $conexion->query("SELECT id_usuario,newpass FROM usuarios WHERE keypass='$keypass' LIMIT 1;");
  $new_pass = 'ASASASSAS';
  if($conexion->rows($sql) > 0) {
    $data = $conexion->recorrer($sql);
    $id_user = $data[0];
    $pass = $data[1];
    $new_pass = Encrypt($pass);
    $password = $data[1];

    $_SESSION['passReset'] = true;

    $conexion->query("UPDATE usuarios SET password='$new_pass' WHERE id_usuario='$id_user';");
    include('reset.php');
  } else {
    header('location: login.php');
  }
  $conexion->liberar($sql);
  $conexion->close();
} else {
  header('location: login.php');
}

 ?>
