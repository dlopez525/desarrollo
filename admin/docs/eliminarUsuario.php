<?php
require '../aconfig/core.php';
$conexion = new AConexion();
$id = $_GET['id'];

$conexion->query("DELETE FROM usuarios WHERE id_usuario = '$id'");

$conexion->close();
header("location: ../Usuario.php");
?>
