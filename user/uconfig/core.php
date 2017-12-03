<?php
#Inicia las sesiones
  session_start();
#Constantes de la APP
  define('UTITLE','iFood');
  define('UCOPY','Copyright &copy; ' . date('Y',time()));
  define('UURL','http://localhost/desarrollo/');

#Constantes de la conexion Base de Datos
  define('servidor', 'localhost');
  define('usuario', 'root');
  define('password', '');
  define('BD', 'delivery');
//
// #Constantes PHPMailer
//   define('PHPMAILER_SERVER', 'mailtrap.io');
//   define('PHPMAILER_PORT', 25);
//   define('PHPMAILER_USER', '5603c12ea2878f');
//   define('PHPMAILER_PASSWORD', 'abbfeae23e9f56');
//   define('PHPMAILER_PROTOCOL', 'tls');

#Constantes Autoload
  // include '../vendor/autoload.php';
  include 'conexion.php';
  include 'funciones.php';
  include 'models/user.php';
  include 'models/rows.php';
 ?>
