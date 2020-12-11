<!DOCTYPE html>
<html len="vi">
<head>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/headerbar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/stylesidebar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/container.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/loginform.css">
    <style>
        body{
            background: url(img/background2.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;;
            background-position: center;
        } 
    </style>
    <script src="<?php echo PUBLIC_PATH?>js/page/login.js"></script>
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
                    echo "<img src=\"".BASE_URL.$value['product_image']."\">";
                    echo "<div class=\"productname\">".$value['product_name']."</div>";
                    echo "<span class=\"productprice\">".$value['product_price']." vnd</span>";
                    echo "</a>";
                    echo "</li>";
                }
            ?>
            </ul>
            <div id = "pagenav">
                <?php
                    if (isset($page['pre'])){
                ?>
                    <a href="<?php echo BASE_URL?>index/homepage/?page=<?php echo $page['pre']?><?php if(isset($curCategory)) echo '&category='.$curCategory?>" 
                    class="pagenav"><?php echo $page['pre']?></a>
                <?php 
                    }
                ?>
                    <a href="#" class="pagenav aactive"><?php echo $page['cur']?></a>
                <?php
                    if (isset($page['next'])){
                ?>
                    <a href="<?php echo BASE_URL?>index/homepage/?page=<?php echo $page['next']?><?php if(isset($curCategory)) echo '&category='.$curCategory?>" 
                    class="pagenav"><?php echo $page['next']?></a>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>