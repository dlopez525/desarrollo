<?php include 'overall/head.php'; ?>
<body>
    <?php include 'overall/header.php'; ?>
    <?php include 'overall/menu.php'; ?>
    <div class="main">
      <?php require 'models/rows.php'; ?>
        <div class="main__cat">
            <!-- <img src="img/menu.jpeg" alt=""> -->
            <a href="#">
                <div class="main__cat__caption">
                    <div class="main__cat__caption__name">
                        <p>Menu</p>
                    </div>
                    <div class="main__cat__caption__cant">
                        <p><?php //use Menu as M; echo M\cat();?></p>
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
                        <p>20</p>
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
                        <p>22</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="../views/js/script.js"></script>
</body>
</html>
