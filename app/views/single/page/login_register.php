<div id="loginscreen">
    <div class="login_register">
        <div class="login_register_choice">
            <div class="lrchoice" onclick="choice(1);">Đăng nhập</div>
            <div class="lrchoice" onclick="choice(2);">Tạo tài khoản</div>
        </div>
        <button class="closebutton" onclick="closelogin();">x</button>
        <form id = "loginForm" class="lrform lform" action="<?php echo BASE_URL ?>Guest/signIn" method="POST">
            <div>
                <label>Email:</label>
                <input type="text" name="userEmail" placeholder="Nhập email hoặc số điện thoại">
            </div>
            <div>
                <label>Mật khẩu:</label>
                <input type="password" name="userPassword" placeholder="Mật khẩu từ 6 đến...kí tự">
            </div>
            <span id="loginmess"></span>
            <div>
                <button type="button" onclick="submitLogin();">Đăng nhập</button>
            </div>
        </form>
        <form id="registrationForm" class="lrform rform" action="<?php echo BASE_URL ?>Guest/signUp" method="POST">
            <div>
                <label>Họ tên:</label>
                <input type="text" name="name" placeholder="Nhập họ và tên">
            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="email" placeholder="Nhập email">
            </div>
            <!-- <div>
                <label>Tên đăng nhập:</label>
                <input type="text" name="username" placeholder="Nhập tên đăng nhập">
            </div> -->
            <div>
                <label>Mật khẩu:</label>
                <input type="password" name="pass" placeholder="Nhập mật khẩu từ 6 đến... kí tự">
            </div>
            <div>
                <label>SĐT:</label>
                <input type="text" name="phone" placeholder="Nhập số điện thoại">
            </div>
            <div>
                <label>Giới tính:</label>
                <div class="gender">
                    <div class="choice">                    
                        <input type="radio" name="gender" value="male" checked>
                        <label>Nam</label><br>
                    </div>
                    <div class="choice">                    
                        <input type="radio" name="gender" value="female">
                        <label>Nữ</label><br>
                    </div>
                </div>
            </div>
            <div>
                <label>Ngày sinh:</label>
                <input type="date" name="birthday">
            </div>
            <span id="messigninup"></span>
            <div>
                <button type="button" onclick="submitRegistration();">Đăng kí</button>
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
                if (this.responseText.includes("thành công")){
                    choice(1);
                }
                mes.innerHTML = this.responseText;
            }
        }
        for(var i = 0 ; i < form.elements.length ; i++){
            var item = form.elements.item(i);
            if (item.name==="gender" && !item.checked) {
                continue;
            }
            if (item.name !="gender"){
                if (item.name!="" && (item.value=="" || item.value==null)){
                    mes.innerHTML = item.name+" không được bỏ trống";
                    return;
                }
            }
            if (item.name=='pass'&&item.value.length<6){
                console.log(item.value.length);
                mes.innerHTML = "Mật khẩu phải từ 6 kí tự trở lên";
                return; 
            }
            if(item.name=='email'){
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!re.test(String(item.value).toLowerCase())){
                mes.innerHTML = "Email không hợp lệ";
                return; 
                };
            }
            if (item.name=='phone'&&(item.value.length!=10||item.value[0]!='0')){
                console.log(item.value.length);
                mes.innerHTML = "SĐT phải gồm 10 kí tự và bắt đầu bằng 0";
                return; 
            }
            data+=(encodeURIComponent(item.name) + '=' + encodeURIComponent(item.value));
            data+="&";
        }
        xmlhttp.open("POST", <?php echo "\"".BASE_URL."\""?>+"guest/signUp", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
        xmlhttp.send(data);
    }
    
    function submitLogin(){
        let form = document.getElementById("loginForm");
        let xmlhttp = new XMLHttpRequest();
        let loginmess=document.getElementById("loginmess");
        loginmess.innerHTML="";
        let data="";
        console.log("aaaaaaa");
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                loginmess.innerHTML = this.responseText;
                if (this.responseText.includes("thành công")){
                    // window.location.replace("<?php echo BASE_URL?>");
                    window.location.reload();
                }
            }
        }
        for(var i = 0 ; i < form.elements.length ; i++){
            var item = form.elements.item(i);
            if (item.name!="" && (item.value=="" || item.value==null)){
                mes.innerHTML = item.name+" không được bỏ trống";
                return;
            }
            
            data+=(encodeURIComponent(item.name) + '=' + encodeURIComponent(item.value));
            data+="&";
        }
        xmlhttp.open("POST", <?php echo "\"".BASE_URL."\""?>+"guest/signIn", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
        xmlhttp.send(data);
    }
</script>