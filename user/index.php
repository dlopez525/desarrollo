<?php
require_once '../config/core.php';
  session_start();
  echo $_SESSION['app_id'];
  echo $_SESSION['app_tipoU'];
  if (!isset($_SESSION['app_id'])) {
    $mensaje = "<div class='logMsg-dang'><p>Debes de Iniciar Sesión</p></div>";
    header('Location: '.URL.'login.php?err='.$mensaje);
  } elseif ($_SESSION['app_tipoU'] != 2) {
    $mensaje = "<div class='logMsg-dang'><p>No tienes los permisos para entrar a esta sección.</p></div>";
    header('Location: '.URL.'login.php?err='.$mensaje);
  }

 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../views/css/styles.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="top">
            <div class="top__menu" id="toggle-menuNav"><i class="icon-navicon"></i></div>
            <div class="top__titulo">Inicio</div>
            <div class="top__carrito"><i class="icon-ios-cart-outline"></i></div>
        </div>
    </header>

    <nav class="nav" id="navMenu">
        <div class="nav__profile">
            <div class="nav__profile__img">
                <img src="../views/img/public/profile-default.png" alt="">
            </div>
            <div class="nav__profile__name">
                <p>Daniel López</p>
            </div>
            <div class="nav__profile__edit">
                <a href="#">Edit profile</a>
            </div>
        </div>

        <ul class="nav__menu">
            <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-home-house-streamline"></i>Home</a></li>
            <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-ios-cart-outline"></i>My cart</a></li>
            <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-ios-time-outline"></i>Last Orders</a></li>
            <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-star"></i>Favorite</a></li>
            <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-settings-streamline-1"></i>Settings</a></li>
        </ul>
    </nav>

    <div class="main">
        <div class="main__cat">
            <!-- <img src="img/menu.jpeg" alt="">
            <a href="#">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Menu</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p>18</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <img src="img/drink.jpg" alt="">
            <a href="#">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Bebidas</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p>10</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <img src="img/sandwich.jpg" alt="">
            <a href="#">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Snacks</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p>20</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <img src="img/candys.jpg" alt="">
            <a href="#">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Golosinas</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p>22</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="../views/js/script.js"></script>
</body>
</html> -->
