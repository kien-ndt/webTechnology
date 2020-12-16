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
<div id="loginscreen" style="display: flex;">
    <div class="login_register">
        <div class="login_register_choice">
            <div class="lrchoice">Đăng nhập</div>
        </div>
        <button class="closebutton" onclick="adminClose();">x</button>
        <form class="lrform lform" action="<?php echo BASE_URL ?>Admin/signIn" method="POST" style="display: flex;">
            <div>
                <label>Email:</label>
                <input type="text" name="adminName" placeholder="Nhập email hoặc số điện thoại">
            </div>
            <div>
                <label>Mật khẩu:</label>
                <input type="password" name="adminPassword" placeholder="Mật khẩu từ 6 đến...kí tự">
            </div>
            <div>
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>        
</div>

<script>    
    function submitRegistration(){
        let form = document.getElementById("registrationForm");
        let mes = document.getElementById("messigninup");
        let xmlhttp = new XMLHttpRequest();
        let data="";
        mes.innerHTML=""
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                mes.innerHTML = this.responseText;
            }
        }
        for(var i = 0 ; i < form.elements.length ; i++){
            var item = form.elements.item(i);
            if (item.name==="gender" && !item.checked) {
                continue;
            }
            if (item.name !="gender"){
                if (item.value=="" || item.value==null){
                    mes.innerHTML = item.name+" không được bỏ trống";
                    // item.style.backgroundColor = "red";
                    return;
                }
            }
            data+=(encodeURIComponent(item.name) + '=' + encodeURIComponent(item.value));
            data+="&";
        }
        console.log(data);
        xmlhttp.open("POST", <?php echo "\"".BASE_URL."\""?>+"guest/signUp", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send(data);
    }
    function adminClose(){
        window.location.replace("<?php echo BASE_URL?>");
    }
</script>
</body>
</html>