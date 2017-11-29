<?php
require_once 'config/core.php';

$conexion = new Conexion();

$sql = $conexion->query("SELECT * FROM usuarios");
$datos = $conexion->recorrer($sql);

  while(($anuncio = $conexion->recorrer($sql)) !=null) {
    echo $anuncio['email'];
}

$conexion->liberar($sql);
 ?>
