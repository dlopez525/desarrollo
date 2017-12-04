<?php
#Inicia las sesiones
  session_start();
  date_default_timezone_set('America/Lima');
#Constantes de la APP
  define('ATITLE','iFood');
  define('ACOPY','Copyright &copy; ' . date('Y',time()));
  define('AURL','http://localhost/desarrollo/');

#Constantes de la conexion Base de Datos
  define('ASERVER', 'localhost');
  define('AUSER', 'root');
  define('APASS', '');
  define('ABD', 'delivery');

#Constantes Autoload
  include 'conexion.php';
  include 'functions.php';
  include 'models/user.php';

 ?>
