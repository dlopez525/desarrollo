<?php
require 'config/core.php';

if(!empty($_POST['email_txt']) and !empty($_POST['pass_txt'])) {
  $conexion = new Conexion();
  $email = $_POST['email_txt'];
  $pass = Encrypt($_POST['pass_txt']);
  $sql = $conexion->query("SELECT id_usuario,id_tipoUsuario FROM usuarios WHERE  email='$email' AND password='$pass' LIMIT 1;");
  if($conexion->rows($sql) > 0) {
    if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60*60*24)); }
    $data = $conexion->recorrer($sql);
    $_SESSION['app_id'] = $data[0];
    $_SESSION['app_tipoU'] = $data[1];

    switch ($_SESSION['app_tipoU']) {
      case '1':
        header('Location: '.URL.'admin/');
        break;

      case '2':
        header('Location: '.URL.'user/');
        break;

      default:
      $mensaje = "<div class='logMsg-dang'><p>Debes de Iniciar Sesión</p></div>";
      header('Location: '.URL.'login.php?err='.$mensaje);
        break;
    }


    // echo 1;
  } else {
    $mensaje = "<div class='logMsg-war'><p>Email o Contraseña Incorrectos</p></div>";
    header('Location: '.URL.'login.php?err='.$mensaje);
  }
  $conexion->liberar($sql);
  $conexion->close();
} else {
  $mensaje = "<div class='logMsg-dang'><p>Debe de llenar todos los campos.</p></div>";
  header('Location: '.URL.'login.php?err='.$mensaje);
}
 ?>