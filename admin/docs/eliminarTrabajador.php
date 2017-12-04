<?php
require '../../config/core.php';
$conexion = new Conexion();
$id = $_GET['id'];

$conexion ->query("DELETE FROM usuarios WHERE id_usuario = '$id'");

header("location: ../trabajadores.php");
?>

