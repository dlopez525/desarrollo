<?php
require '../../config/core.php';
$conexion = new Conexion();
$id = $_GET['id'];

$conexion ->query("DELETE FROM menu WHERE id_menu = '$id'");

header("location: ../menus.php");
?>