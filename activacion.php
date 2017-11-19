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
            <p>Activacion</p>
            <span>desde tu email</span>
        </div>

        <div class="container">
            <?php
              if (isset($_GET['success-act'])) {
                echo "<div class='logMsgNT-succ'>
                      <p>gracias. Tu cuenta fue activada correctamente</p>
                      </div>";
              } elseif (isset($_GET['err-act'])) {
                echo "<div class='logMsgNT-war'>
                      <p>algo salio mal. Vuelve a intentarlo.</p>
                      </div>";
              }
             ?>
        </div>
    </div>
    <div class="container fin">
        <div class="buttonLog">
            <a href="login.php" class="buttomLog__SignUp">Listo!</button>
        </div>
    </div>
</body>
</html>
