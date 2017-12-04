<?php
#Inicia las sesiones
  session_start();
  date_default_timezone_set('America/Lima');
#Constantes de la APP
  define('TITLE','iFood');
  define('COPY','Copyright &copy; ' . date('Y',time()));
  define('URL','http://localhost/desarrollo/');

#Constantes de la conexion Base de Datos
  define('SERVER', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BD', 'delivery');

#Constantes Autoload
  include 'vendor/autoload.php';
  include 'conexion.php';
  include 'funciones.php';

 ?>
