    <div id="header-bar">
        <img src="<?php echo PUBLIC_PATH?>img/logo.jpg" class="logo" alt="logo">
        <form method="POST" action="product.html">
            <input type="text">
            <select>
            <option>laptop</option>
            <option>pc</option>
            </select>
            <button type="submit">Tìm kiếm</button>
        </form>
        <div class="account-cart-area">
            <div class="account-area">
                <div class="account-icon">
                    <!-- <img src="echo PUBLIC_PATH?>img/accounticon.png"> -->
                    <img src="<?php echo BASE_URL?>images/account_image.jpg">
                    <span>Tài khoản</span>
                </div>
                <div class="account-nav-container">
                    <div class="account-nav">
                        
                        <?php if (!isset($_SESSION['login']))
                        print("<button onclick='loginclick(); choice(1);'>Đăng nhập</button>
                               <button onclick='loginclick(); choice(2);'>Tạo tài khoản</button>  
                               ");      
                        else {
                            if ($_SESSION['login'] == true){
                                print("<button><a href='".BASE_URL."admin/product'>Admin page</a></button>");                                 
                            }
                            print("<button><a href='".BASE_URL."Guest/logout'>Đăng xuất</a></button>");
                        }               
                        ?>                
                    </div>
                </div>
            </div>

            <div class="cart-area" onclick="showCart();">
                <div class = "cart-area-nav">                    
                    <img src="<?php echo BASE_URL?>images/cart_image.png">
                    <span>Giỏ hàng</span>
                </div>
                <div>
                    <div id="cartShow">
                        
                    </div>

                </div>
            </div>            
        </div>
    </div>
    <script>
        function showCart(){
            let xmlhttp = new XMLHttpRequest();
            let item = document.getElementById("cartShow");
            xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        item.innerHTML = this.response;
                    }
            }
            xmlhttp.open("GET", <?php echo "\"".BASE_URL."\""?>+"cart/showCart", true);
            xmlhttp.send();
        }
    </script>
