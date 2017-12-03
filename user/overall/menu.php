<nav class="nav" id="navMenu">
    <div class="nav__profile">
        <div class="nav__profile__img">
            <img src="../views/<?php echo $foto; ?>" alt="">
        </div>
        <div class="nav__profile__name">
            <p><?php echo $nombre ." ". $apellido; ?></p>
        </div>
        <div class="nav__profile__edit">
            <a href="#">Edit profile</a>
        </div>
    </div>

    <ul class="nav__menu">
        <li class="nav__menu__item"><a href="index.php" class="nav__menu__link"><i class="icon-home-house-streamline"></i>Inicio</a></li>
        <li class="nav__menu__item" id="parentSubMenu"><a href="#" class="nav__menu__link"><i class="icon-ios-cart-outline"></i>Carritos</a>
          <ul class="" id="submenu">
            <li class="nav__menu__item"><a href="cart.php" class="nav__menu__link"><i class="icon-ios-cart-outline"></i>Mi carrito</a></li>
            <li class="nav__menu__item"><a href="cartM.php" class="nav__menu__link"><i class="icon-ios-cart-outline"></i>Mi menu</a></li>
          </ul>

        </li>
        <li class="nav__menu__item"><a href="cart.php" class="nav__menu__link"><i class="icon-ios-cart-outline"></i>Mis Compras</a></li>
        <!-- <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-ios-time-outline"></i>Last Orders</a></li>
        <li class="nav__menu__item"><a href="#" class="nav__menu__link"><i class="icon-star"></i>Favorite</a></li> -->
        <li class="nav__menu__item"><a href="logout.php" class="nav__menu__link"><i class="icon-settings-streamline-1"></i>Salir</a></li>
    </ul>
</nav>
