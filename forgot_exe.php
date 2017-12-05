<?php
  require_once 'config/core.php';

  $conexion = new Conexion();

  $email = $_POST['email_txt'];
  $sql = $conexion->query("SELECT id_usuario, nombre FROM usuarios WHERE email='$email' LIMIT 1;");

  if ($conexion->rows($sql) > 0) {
    $data = $conexion->recorrer($sql);
    $id = $data[0];
    $nombre = $data[1];
    $keypass = md5(time());
    $new_pass = strtoupper(substr(sha1(time()),0,8));
    $link = URL . 'reset_exe.php?key=' . $keypass;

    $oMail = new PHPMailer();
    $oMail->CharSet = "UTF-8";
    $oMail->Encoding = "quoted-printable";
    $oMail->isSMTP();
    $oMail->Host = 'mailtrap.io';
    $oMail->Username = '5603c12ea2878f';
    $oMail->Password = 'abbfeae23e9f56';

    /***/
    $oMail->SMTPAuth = true;
    $oMail->SMTPSecure = 'tls';
    $oMail->Port = 25;

    $oMail->From = 'mail@eatit.com'; //Remitente
    $oMail->addAddress($email); //Destinatario

    $oMail->Subject = 'Reestablece tu contraseña'; //asunto
    $oMail->Body = LostpassTemplate($nombre,$link); //contenido
    $oMail->AltBody = 'Hola ' . $nombre . ' para recuperar tu contraseña debes ir a este enlace: ' . $link . ' , si no has solicitado un cambio de contraseña no necesitas hacer nada.';

    if($oMail->send() == false){
      $mensaje = "<div class='logMsg-war'><p>".$oMail->ErrorInfo."</p></div>";
      header('Location: '.URL.'forgot.php?err='.$mensaje);
    } else {
      $conexion->query("UPDATE usuarios SET keypass='$keypass', newpass='$new_pass' WHERE id_usuario='$id';");
      $mensaje = "<div class='logMsg-succ'><p>Te enviamos un correo a: <strong>{$email}</strong>. Con los pasos para reestablecer tu contraseña</p></div>";
      header('Location: '.URL.'forgot.php?err='.$mensaje);
    }
  }

  $conexion->liberar($sql);
  $conexion->close();
 ?>
