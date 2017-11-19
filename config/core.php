<?php
#Inicia las sesiones
  session_start();
#Constantes de la APP
  define('TITLE','Delivery');
  define('COPY','Copyright &copy; ' . date('Y',time()));
  define('URL','http://dyl.dev/desarrollo/');

#Constantes de la conexion Base de Datos
  define('servidor', 'localhost');
  define('usuario', 'root');
  define('password', '');
  define('BD', 'delivery');

#Constantes PHPMailer
  define('PHPMAILER_SERVER', 'mailtrap.io');
  define('PHPMAILER_PORT', 25);
  define('PHPMAILER_USER', '5603c12ea2878f');
  define('PHPMAILER_PASSWORD', 'abbfeae23e9f56');
  define('PHPMAILER_PROTOCOL', 'tls');

#Constantes Autoload
  require 'vendor/autoload.php';
  include 'conexion.php';
  include 'funciones.php';

 ?>
