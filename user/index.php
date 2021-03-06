<?php
include 'overall/head.php';
if (isset($_SESSION['passReset'])) {
  header('Location: changePas.php');
}
?>
<body>
    <?php include 'overall/header.php'; ?>
    <?php include 'overall/menu.php'; ?>
    <div class="main">
        <div class="main__cat">
            <!-- <img src="img/menu.jpeg" alt=""> -->
            <a href="menus.php">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Menu</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p><?php echo catMenu();?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <!-- <img src="img/drink.jpg" alt=""> -->
            <a href="bebidas.php">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Bebidas</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p><?php echo cat('bebidas');?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <!-- <img src="img/sandwich.jpg" alt=""> -->
            <a href="snacks.php">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Snacks</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p><?php echo cat('snack');?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="main__cat">
            <img src="img/candys.jpg" alt="">
            <a href="golosinas.php">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Golosinas</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p><?php echo cat('golosinas');?></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="../views/js/script.js"></script>
</body>
</html>
