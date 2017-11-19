<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Activa tu cuenta</title>
</head>
<body class="body-log">
    <div class="container">
        <div class="titleLog">
            <p>Restablece tu contraseña</p>
            <span>desde tu email</span>
        </div>
    </div>
    <div class="container">
        <div class='logMsgNT-succ'>
          <p>Tu contraseña fue actualizada correctamente. se ha generado una nueva contraseña: <strong> <?php echo $password; ?></strong>, prueba <a href="login.php">iniciando sesión</a> con ella y podrás cambiarla una vez estes dentro./p>
        </div>
    </div>

    <div class="container fin">
      <div class="buttonLog">
          <a class="buttomLog__SignUp" href="login.php">Listo!</a>
      </div>
    </div>
</body>
</html>
