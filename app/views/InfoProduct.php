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
        <div class="menu">
            <ul style="padding: 0px; margin: 0px;">
                <li class="item">
                    <a href="" class="btn">Danh mục</a>
                    <div class="smenu">
                        <?php 
                            echo "<a href=\"".BASE_URL."index/homepage/?page=1\">Tất cả</a>";
                        ?>
                        <?php foreach($category as $value){
                            echo "<a href=\"".BASE_URL."index/homepage/?page=1&category=".$value['category_name']."\">".$value['category_name']."</a>";
                        }?>
                    </div>
                </li>
            </ul>
        </div>
        <div>
           
        </div>
    </div>
    <script>
        function addToCart(id){
            let xmlhttp = new XMLHttpRequest();
            let item = document.getElementById("messa");
            xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    }
            }
            xmlhttp.open("GET", <?php echo "\"".BASE_URL."\""?>+"cart/addProductToCart/?id="+id+"&count=1", true);
            xmlhttp.send();
        }

    </script>
</body>
</html>