<?php include 'overall/head.php'; ?>
<body class="grayBG">
     <?php include 'overall/header.php'; ?>
    <?php include 'overall/menu.php'; ?>
    <div id="productos">
        <div class="productos">
            <?php include 'docs/mostrargolosinas.php'; ?>
        </div>
    </div>

    <div id="total">
        <div class="total">
            <div class="total__text">
                <p>BUY</p>
            </div>
            <div class="total__price">
                <p id="total"></p>
            </div>
        </div>
    </div>

    <script src="../views/js/script.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>
