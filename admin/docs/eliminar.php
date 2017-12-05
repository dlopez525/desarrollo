<?php
require '../aconfig/core.php';
$conexion = new AConexion();
$id = $_GET['id'];

$conexion->query("DELETE FROM productos WHERE id_producto = '$id'");

$conexion->close();
header("location: ../productos.php?msg=2");
?>
