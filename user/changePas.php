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
            <span>ingresa tu nueva contraseña</span>
        </div>
    </div>
    <div class="container">
      <form class="formLog" action="models/changePass.php" method="post" enctype="application/x-www-form-urlencoded">
        <div class="boxTextLog boxTextLog-login">
            <div class="boxTextLog__group">
                <label for="pass" class="boxTextLog__group__label">Contraseña Nueva:</label>
                <input type="text" class="boxTextLog__group__input" id="pass" name="newPass_txt" required>
            </div>
        </div>
        <?php
          if (isset($_GET['succ'])) {
            echo '<div class="buttonLog">
                <a class="buttomLog__SignUp" href="logout.php">Iniciar Sesión</a>
            </div>';
          } else {
            echo '<div class="buttonLog">
                <button class="buttomLog__SignUp" type="submit">Cambiar Contraseña</button>
            </div>';
          }
         ?>
        <!-- <div class="buttonLog">
            <button class="buttomLog__SignUp" type="submit">Cambiar Contraseña</button>
        </div> -->
      </form>
    </div>
</body>
</html>
