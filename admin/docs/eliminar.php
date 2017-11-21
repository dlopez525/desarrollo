<?php
require '../../config/core.php';
$conexion = new Conexion();

$id = $_GET['id'];

$conexion ->query("DELETE * FROM productos WHERE id_producto = '$id'");
?>
