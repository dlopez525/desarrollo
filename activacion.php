<?php include 'overall/head.php'; ?>
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
