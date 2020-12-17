<!DOCTYPE html>
<html len="vi">
<head>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/headerbar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/stylesidebar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/container.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/loginform.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/productDuc/product.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/productDuc/style.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8"/>
</head>
<body>
    <?php include_once "single/page/login_register.php"?>
    <div>
        <?php include_once "single/page/headbar.php" ?>
    </div>
    <div id="containerhome">
    <main class="content-area">
        <div class="product-area">
            <div class="product-title"><?php echo $book['product_name']?>
                <hr>
            </div>
            <div class="product-info flex-display">
                <div class="product-image"> <img src="<?php echo BASE_URL.$book['product_image']?>" alt="lỗi"></div>
                <div class="product-price">
                    <div class="price-detail">
                        <!-- <span><b>Trạng thái:</b> Còn hàng</span> <br> <br>
                        <span><b>Xuất xứ:</b> Việt Nam</span> <br> <br> -->
                        <span class="price-tag"><b>Giá bán</b></span>
                        <span class="price"><b><?php echo $book['product_price']." VNĐ"?></b></span>
                    </div>
                    <div class="product-description">
                        <div class="product-des-title"><b style="font-size: 20px;"><?php echo $book['product_name']?></b></div> <br>
                        <div class="product-des-detail">
                            <ul>
                                <li>Danh mục:</li>
                                <li>ewuigfiuefuf</li>
                                <li>eufiuegfiuge</li>
                            </ul>
                        </div>
                    </div>
                    <div class="amount flex-display">
                        <div class="product-amount flex-display">
                            <div class="minus">-</div>
                            <div class="number">1</div>
                            <div class="add">+</div>
                        </div>
                        <div class="buy-product">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <b>Mua hàng</b>
                        </div>
                        <div class="call">
                            <i class="fa fa-phone" aria-hidden="true"></i> <b>Gọi ngay</b>
                        </div>
                    </div>
                </div>
                <div class="notification">
                    <div class="attention">
                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                        DỊCH VỤ & CHÚ Ý<br>
                        <hr>
                        <p>Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :
                            <span style="color: red;"> 0932 023 992</span> để biết thêm chi tiết về Phụ kiện sản phẩm.
                        </p>
                    </div>
                    <div class="shipping-notify">
                        <p>Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.</p> <br>
                        <a href="#" style="text-align: right; text-decoration: none;">Xem thêm</a>
                    </div>
                    <div class="support">
                        <span>BẠN CẦN HỖ TRỢ?</span> <br> <br>
                        <span>Chat với chúng tôi:</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    thietbivanphong.com</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    thietbivanphong.com</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    thietbivanphong.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="topic">
            <div class="title flex-display">
                <span>Chi tiết sản phẩm</span>
                <div class="triangle-title"></div>
                <div class="horizontal"></div>
            </div>
            <div class="details">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker
                    including versions of Lorem Ipsum</p>
            </div>
        </div>

        <div class="topic">
            <div class="title flex-display">
                <span style="font-size: 16px;">Thông số kỹ thuật</span>
                <div class="triangle-title"></div>
                <div class="horizontal"></div>
            </div>
            <div class="details">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker
                    including versions of Lorem Ipsum</p> <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker
                    including versions of Lorem Ipsum</p>
            </div>
        </div>

        <div class="topic">
            <div class="title flex-display">
                <span style="font-size: 16px;">Sản phẩm liên quan</span>
                <div class="triangle-title"></div>
                <div class="horizontal"></div>
            </div>
            <div class="product-list flex-display">
                <div class="relate-product">
                    <img src="img/iphonex.png" alt="Iphone X"> <br>
                    <span style="text-align: center;">
                        <h3>Iphone X 64GB</h3>
                    </span>
                    <div class="add-to-cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng <br>
                    </div>
                    <div class="price"><b>17.800.000đ</b></div>
                </div>
                <div class="relate-product">
                    <img src="img/iphonex.png" alt="Iphone X"> <br>
                    <span style="text-align: center;">
                        <h3>Iphone X 64GB</h3>
                    </span>
                    <div class="add-to-cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng <br>
                    </div>
                    <div class="price"><b>17.800.000đ</b></div>
                </div>
                <div class="relate-product">
                    <img src="img/iphonex.png" alt="Iphone X"> <br>
                    <span style="text-align: center;">
                        <h3>Iphone X 64GB</h3>
                    </span>
                    <div class="add-to-cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng <br>
                    </div>
                    <div class="price"><b>17.800.000đ</b></div>
                </div>
            </div>
        </div>
    </main>
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