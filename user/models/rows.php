<?php
  $conexion = new Conexion();
  function cat($CAT) {
    $cat = $CAT;
    $sql = $conexion->query("SELECT * FROM productos WHERE categoria = '$cat';");
    $rows = $conexion->rows($sql);
    $conexion->liberar($sql);
    $conexion->close();
    return $cat;
  }

  // namespace Menu;
  // // $conexion = new Conexion();
  // function cat() {
  //   $sql = $conexion->query("SELECT * FROM menu ;");
  //   $rows = $conexion->rows($sql);
  //   $conexion->liberar($sql);
  //   $conexion->close();
  //   return $rows;
  // }
 ?>
