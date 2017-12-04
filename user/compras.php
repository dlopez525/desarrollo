<?php include 'overall/head.php'; ?>
<body class="grayBG">
     <?php include 'overall/header.php'; ?>
    <?php include 'overall/menu.php'; ?>
    <div class="container">
      <?php
        if (isset($_GET["err"])) {
          $mensaje = $_GET["err"];
          echo $mensaje;
        }
       ?>
    </div>
  <div class="compras">
    <?php include 'models/compras.php';?>

  </div>

    <script src="../views/js/script.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>
