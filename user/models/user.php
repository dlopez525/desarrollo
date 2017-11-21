<?php
  $conexion = new Conexion();

  $idUser = $_SESSION['app_id'];

  $sql = $conexion->query("SELECT nombre,apellido,foto FROM usuarios WHERE id_usuario = '$idUser';");
  $data = $conexion->recorrer($sql);
  $nombre = $data[0];
  $apellido = $data[1];
  $foto = $data[2];
  
  $conexion->liberar($sql);
  $conexion->close();
 ?>
