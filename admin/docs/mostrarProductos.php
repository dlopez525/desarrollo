<?php
  include '../config/core.php';

  $conexion = new Conexion();
  
  $sql = $conexion->query("SELECT id_producto,producto,categoria,stock,precio FROM productos");

  $data = $conexion->recorrer($sql);
  $id = $data[0];
  $producto = $data[1];
  $categoria = $data[2];
  $stock = $data[3];
  $precio = $data[4];
 ?>
