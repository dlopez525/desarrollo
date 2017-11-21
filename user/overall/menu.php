<nav class="nav" id="navMenu">
    <div class="nav__profile">
        <div class="nav__profile__img">
            <img src="../views/img/public/profile-default.png" alt="">
        </div>
        <div class="nav__profile__name">
            <p><?php echo $nombre ." ". $apellido; ?></p>
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
        <li class="nav__menu__item"><a href="logout.php" class="nav__menu__link"><i class="icon-settings-streamline-1"></i>Salir</a></li>
    </ul>
</nav>
