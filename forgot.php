<?php
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
            <p>Recupera tu contraseña</p>
            <span>ingresa tu email</span>
        </div>
    </div>
    <div class="container">
      <form class="formLog" action="forgot_exe.php" method="post">
        <div class="boxTextLog boxTextLog-login">
            <div class="boxTextLog__group">
                <label for="email" class="boxTextLog__group__label">Email:</label>
                <input type="text" class="boxTextLog__group__input" id="email" name="email_txt">
            </div>
        </div>

        <div class="buttonLog">
            <button class="buttomLog__SignUp" type="submit">Listo!</button>
        </div>
      </form>

    </div>
    <!-- <div class="container fin">
        <div class="buttonLog">
            <button class="buttomLog__SignUp">Listo!</button>
        </div>
    </div> -->
    <!-- <div class="container">
        <div class="linkSingup">
            <p>¿Tienes una cuenta?<a href="#" class="linkSingup__link"> Repítelo</a></p>
        </div>
    </div> -->
</body>
</html>
