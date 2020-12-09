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
</head>
<body>
    <?php include_once "single/page/login_register.php"?>
    <div>
        <?php include_once "single/page/headbar.php" ?>
    </div>
    <div id="containerhome">
        <?php include_once "single/page/sidebar.php" ?>
        <?php include_once "single/page/containeritem.php" ?>
    </div>
    
</body>
</html>