<?php
  include 'overall/sessionControl.php';
  include 'overall/head.php'; ?>
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
            <p>Inicia Sesión</p>
            <span>ingresa tus datos</span>
        </div>
    </div>
    <form class="formLog" action="login_exe.php" method="post" enctype="application/x-www-form-urlencoded">
      <div class="container">
          <div class="boxTextLog boxTextLog-login">
              <div class="boxTextLog__group">
                  <label for="email" class="boxTextLog__group__label">Email:</label>
                  <input type="text" class="boxTextLog__group__input" id="email" name="email_txt">
              </div>
              <div class="boxTextLog__group">
                  <label for="pass" class="boxTextLog__group__label">Contraseña:</label>
                  <input type="password" class="boxTextLog__group__input" id="pass" name="pass_txt">
              </div>
              <div class="boxTextLog__group">
                <a href="forgot.php">¿Olvidaste  tu contraseña?</a>
              </div>

              <div class="boxTextLog__group">
                <label><input type="checkbox" name="sesion" value="1"> Mantener la sesión iniciada.</label>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="buttonLog">
              <button class="buttomLog__SignUp">Iniciar Sesión</button>
          </div>
      </div>
    </form>
    <div class="container">
        <div class="buttonLogSocial">
            <button class="buttomLogSocial__SignUp">Inicia Sesión con Google</button>
        </div>
    </div>
    <div class="container fin">
        <div class="linkSingup">
            <p>¿No tienes una cuenta? <a href="singup.php" class="linkSingup__link">Regístrate</a></p>
        </div>
    </div>
</body>
</html>
