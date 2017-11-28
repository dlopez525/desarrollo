<?php
#Inicia las sesiones
  session_start();
#Constantes de la APP
  define('ATITLE','iFood');
  define('ACOPY','Copyright &copy; ' . date('Y',time()));
  define('AURL','http://localhost/desarrollo/');

#Constantes de la conexion Base de Datos
  define('ASERVER', 'localhost');
  define('AUSER', 'root');
  define('APASS', '');
  define('ABD', 'delivery');
//
// #Constantes PHPMailer
//   define('PHPMAILER_SERVER', 'mailtrap.io');
//   define('PHPMAILER_PORT', 25);
//   define('PHPMAILER_USER', '5603c12ea2878f');
//   define('PHPMAILER_PASSWORD', 'abbfeae23e9f56');
//   define('PHPMAILER_PROTOCOL', 'tls');

#Constantes Autoload
  // require '../../vendor/autoload.php';
  include 'conexion.php';
  // include 'funciones.php';
  include 'models/user.php';

 ?>
