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
                    <img src="<?php echo PUBLIC_PATH?>img/accounticon.png">
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

            <div class="cart-area">
                <img src="img/carticon.png">
                <span>Giỏ hàng</span>
            </div>            
        </div>
    </div>
