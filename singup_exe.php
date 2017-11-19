<?php
  include 'config/core.php';

  $conexion = new Conexion();

  $nombre = $_POST['nombre_txt'];
  $apellido = $_POST['apellido_txt'];
  $email = $_POST['email_txt'];
  $password = Encrypt($_POST['password_txt']);
  $terminos = $_POST['terminos_chk'];
  $btn = $_POST['singup_btn'];

  if (isset($btn)) {
    if ($terminos != 1) {
      $mensaje = "<div class='logMsg-dang'><p>Debes de aceptar los téminos y condiciones</p></div>";
      header('Location: '.URL.'singup.php?err='.$mensaje);
    }

    $sql = $conexion->query("SELECT email FROM usuarios WHERE email = '$email'");

    if ($conexion->rows($sql) == 0) {
      $key = md5(time());
      $link = URL.'activacion_exe.php?key='.$key;

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

      $oMail->From = 'mail@elporfirio.com'; //Remitente
      $oMail->addAddress($email); //Destinatario

      $oMail->Subject = 'Activación de tu cuenta en delivery'; //asunto
      $oMail->Body = EmailTemplate($nombre,$link); //contenido
      $oMail->AltBody = 'Hola ' . $nombre . ' para activar tu cuenta accede al siguiente elance: ' . $link;


      /***/
      if($oMail->send() == false){
        $mensaje = $oMail->ErrorInfo;
            header('Location: '.URL.'singup.php?err='.$mensaje);
      } else {
        $conexion->query("INSERT INTO usuarios (email,password,nombre,apellido,foto,cod_activacion,id_tipoUsuario,id_tipoCuenta,cuenta) VALUES ('$email','$password','$nombre','$apellido','img/public/profile-default.png','$key',2,1,'Disabled');");
            $sql_2 = $conexion->query("SELECT MAX(id_usuario) AS id FROM usuarios;");
            $_SESSION['app_id'] = $conexion->recorrer($sql_2)[0];
            $conexion->liberar($sql_2);

            $mensaje = "<div class='logMsg-succ'><p>Gracias, por registrarte. enviamos un correo de activación a: <span>{$email}</span></p></div>";
            header('Location: '.URL.'singup.php?err='.$mensaje);
      }

  } else {
    $mensaje = "<div class='logMsg-war'><p>El correo <span>{$email}</span>, ya se encuentra registrado. <a href='".URL."login.php'>Inicia Sesión.</a></p></div>";
    header('Location: '.URL.'singup.php?err='.$mensaje);
  }
    $conexion->liberar($sql);
    $conexion->close();
  }
 ?>
