<?php
require 'uconfig/core.php';

$conexion = new Conexion();

function generarCodigo($longitud, $tipo=0) {
    $codigo = "";
    $caracteres="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $max=strlen($caracteres)-1;
    for($i=0;$i < $longitud;$i++) {
        $codigo.=$caracteres[rand(0,$max)];
    }
    return $codigo;
}
$newCode = "PED_".generarCodigo(5);

$sql = $conexion->query("SELECT codigoPedido FROM detalle_pedido WHERE codigoPedido = '$newCode'");

if ($conexion->rows($sql) != 0) {
  $newCode = "PED_".generarCodigo(5);
}

 ?>
