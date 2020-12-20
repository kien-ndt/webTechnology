<!DOCTYPE html>
<html len="vi">
<head>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/headerbar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/stylesidebar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/container.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/loginform.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/product.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/style.css">
    <!-- <style>
        body{
            background: url(img/background2.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;;
            background-position: center;
        } 
    </style> -->
    <script src="<?php echo PUBLIC_PATH?>js/page/login.js"></script>
    <meta charset="utf-8"/>
</head>
<body>
    <?php include_once "single/page/login_register.php"?>
    <div>
        <?php include_once "single/page/headbar.php" ?>
    </div>
    <main>
        <div class="image">
            <img src="<?php echo BASE_URL."images/successOrder.jpg"?>" >
        </div>
        <div class="report">
            <p>Cảm ơn bạn đã mua sản phẩm, đơn hàng của bạn đã được hệ thống ghi nhận!</p>
            <a style="color:#5a88ca" href="<?php echo BASE_URL?>"><b><u>Quay lại trang chủ!</u></b></a>
        </div>
    </main>

</body>

</html>