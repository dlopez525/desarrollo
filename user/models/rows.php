<?php
  function cat($CAT) {
    $conexion = new Conexion();
    $sql = $conexion->query("SELECT * FROM productos WHERE categoria = '$CAT';");
    $rows = $conexion->rows($sql);
    $conexion->liberar($sql);
    $conexion->close();
    return $rows;
  }

  function catMenu() {
    $conexion = new Conexion();
    $sql = $conexion->query("SELECT * FROM menu;");
    $rows = $conexion->rows($sql);
    $conexion->liberar($sql);
    $conexion->close();
    return $rows;
  }

 ?>
