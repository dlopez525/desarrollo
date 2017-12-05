<?php
require '../aconfig/core.php';
$conexion = new AConexion();
$id = $_GET['id'];

$conexion->query("DELETE FROM menu WHERE id_menu = '$id'");

$conexion->close();

header("location: ../menus.php?msg=2");
?>
