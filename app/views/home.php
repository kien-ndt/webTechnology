<!DOCTYPE html>
<html len="vi">
<head>
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/page/headerbar.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/stylesidebar.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/page/container.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/page/loginform.css">
    <style>
        body{
            background: url(img/background2.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;;
            background-position: center;
        } 
    </style>
    <script src="<?php echo BASE_URL?>public/js/page/login.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <?php include_once "single/page/login_register.php"?>
    <div>
        <?php include_once "single/page/headbar.php" ?>
    </div>
    <div id="containerhome">
        <?php include_once "single/page/sidebar.php" ?>
        <div id="showitem">
            <ul class="list-item">
            <?php
                foreach($book as $value){
                    echo "<li class=\"blockitem\">";
                    echo "<a href=\"#\" class=\"item\" style=\"text-decoration: none;\">";
                    echo "<img src=\"".$value['product_image']."\">";
                    echo "<div class=\"productname\">".$value['product_name']."</div>";
                    echo "<span class=\"productprice\">".$value['product_price']." vnd</span>";
                    echo "</a>";
                    echo "</li>";
                }
            ?>
            </ul>
            <div>
            <a href="<?php echo BASE_URL?>index/homepage/1">1</a>
            <a href="<?php echo BASE_URL?>index/homepage/2">2</a>
            <a>3</a>
            </div>
        </div>
    </div>
</body>
</html>