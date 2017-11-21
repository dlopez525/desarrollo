<?php include 'overall/head.php'; ?>
<body class="body-log">
  <div class="container">
    <?php
      if (isset($_GET["err"])) {
        $mensaje = $_GET["err"];
        echo $mensaje;
      }
     ?>
  </div>
    <div class="container">
        <div class="titleLog">
            <p>Regístrate</p>
            <span>ingresa tus datos</span>
        </div>
    </div>
        <form class="formLog" action="singup_exe.php" method="post">
          <div class="container">
            <div class="boxTextLog">
                <div class="boxTextLog__group">
                    <label for="nombre" class="boxTextLog__group__label">Nombre:</label>
                    <input type="text" class="boxTextLog__group__input" id="nombre" name="nombre_txt" required>
                </div>
                <div class="boxTextLog__group">
                    <label for="apellido" class="boxTextLog__group__label">Apellido:</label>
                    <input type="text" class="boxTextLog__group__input" id="apellido" name="apellido_txt" required>
                </div>
                <div class="boxTextLog__group">
                    <label for="email" class="boxTextLog__group__label">Email:</label>
                    <input type="text" class="boxTextLog__group__input" id="email" name="email_txt" required>
                </div>
                <div class="boxTextLog__group">
                    <label for="pass" class="boxTextLog__group__label">Contraseña:</label>
                    <input type="password" class="boxTextLog__group__input" id="pass" name="password_txt" required>
                </div>
            </div>
          </div>

          <div class="container">
              <div class="conditionsLog">
                  <label for="conditions"><input type="checkbox" class="conditionsLog__checkbox" id="conditions" value="1" name="terminos_chk"> Acepto los <a href="#">términos y condiciones</a></label>
              </div>
          </div>
          <div class="container">
              <div class="buttonLog">
                  <button class="buttomLog__SignUp" type="submit" name="singup_btn">Registrar</button>
              </div>
          </div>

        </form>

    <div class="container">
        <div class="linkSingup">
            <p>¿Tienes una cuenta? <a href="login.php" class="linkSingup__link">Inicia Sesión</a></p>
        </div>
    </div>
</body>
</html>
