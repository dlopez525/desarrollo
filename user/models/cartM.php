<?php
require_once '../uconfig/core.php';
$conexion = new Conexion();

if(isset($_SESSION['menu'])){
  if(isset($_GET['id'])){
        $arreglo=$_SESSION['menu'];
        $encontro=false;
        $numero=0;
        for($i=0;$i<count($arreglo);$i++){
          if($arreglo[$i]['Id']==$_GET['id']){
            $encontro=true;
            $numero=$i;
          }
        }
        if($encontro==true){
          $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
          $_SESSION['menu']=$arreglo;
        }else{
          $nombre="";
          $precio=0;
          $imagen="";
          $re=$conexion->query("SELECT * FROM menu WHERE id_menu=".$_GET['id']);
          while ($f=mysqli_fetch_array($re)) {
            $nombre=$f['menu'];
            $precio=$f['precio'];
            $imagen=$f['imagen'];
          }
          $datosNuevos=array('Id'=>$_GET['id'],
                  'Nombre'=>$nombre,
                  'Precio'=>$precio,
                  'Imagen'=>$imagen,
                  'Cantidad'=>1);

          array_push($arreglo, $datosNuevos);
          $_SESSION['menu']=$arreglo;

        }
  }
}else{
  if(isset($_GET['id'])){
    $nombre="";
    $precio=0;
    $imagen="";
    $re=$conexion->query("SELECT * FROM menu WHERE id_menu=".$_GET['id']);
    while ($f=mysqli_fetch_array($re)) {
      $nombre=$f['menu'];
      $precio=$f['precio'];
      $imagen=$f['imagen'];
    }
    $arreglo[]=array('Id'=>$_GET['id'],
            'Nombre'=>$nombre,
            'Precio'=>$precio,
            'Imagen'=>$imagen,
            'Cantidad'=>1);
    $_SESSION['menu']=$arreglo;
  }
}

$conexion->liberar($re);
$conexion->close();
header('location: ../menus.php');

 ?>
