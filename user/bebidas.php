<?php include 'overall/head.php'; ?>
<body class="grayBG">
     <?php include 'overall/header.php'; ?>
    <?php include 'overall/menu.php'; ?>
    <div id="productos">
        <div class="productos">
            <?php include 'docs/mostrarbebidas.php'; ?>
        </div>
    </div>

    <div id="total">
        <div class="total">
            <div class="total__text">
                <p>BUY</p>
            </div>
            <div class="total__price">
                <p><?php echo $total; ?></p>
            </div>
        </div>
    </div>

    <script src="../views/js/script.js"></script>
</body>
</html>
