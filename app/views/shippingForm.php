<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/style.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        echo "Thêm header";
        <!-- <div class="top-info">
            <div class="content-area">
                <div class="content-info">
                    <span class="top-info-email"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        Email:
                        Duchoang1234@gmail.com
                    </span>
                    <span class="top-info-phone">
                        <i class="fa fa-mobile" aria-hidden="true" style="font-size: 20px;"></i>
                        Phone: 0961822743
                    </span>
                </div>
            </div>
        </div>


        <div class="content-area">
            <div class="top-logo-search flex-display">
                <div class="top-logo"><img src="img/logohere.jpeg" width="250" height="100" alt="logohere.jpeg"></div>

                <div class="top-search">
                    <form class="search-bar" method="GET">
                        <input type="text" placeholder="Tìm kiếm..." name="searchInput">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <div class="branch-info">
                    <div class="branch">
                        <b>Trụ sở chính</b> <br>
                        <b class="branch-name">Nguyễn Văn Luông</b>
                    </div>
                    <div class="branch">
                        <b>Văn phòng chi nhánh</b> <br>
                        <b class="branch-name">Nguyễn Văn Luông</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="content-area">
                <div class="menu-area flex-display">
                    <div class="dropdown-menu">
                        <div class="main-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <b>danh mục sản phẩm</b>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        </div>
                        <div class="sub-menu">
                            <a href="#">Điện thoại</a>
                            <a href="#">Máy tính</a>
                            <a href="#">Macbook cũ</a>
                            <a href="#">Macbook mới</a>
                        </div>
                    </div>
                    <nav class="menu-nav">
                        <a href="#"><b>trang chủ</b></a>
                        <a href="#"><b>giới thiệu</b></a>
                        <a href="#"><b>bảo hành</b></a>
                        <a href="#"><b>sản phẩm</b></a>
                        <a href="#"><b>tin tức</b></a>
                        <a href="#"><b>liên hệ</b></a>
                        <a href="http://localhost/Giaodien/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </nav>
                </div>

            </div>
        </div> -->
    </header>

    <main class="content-area">
        <div class="product-area">
            <div class="product-title">Đặt hàng
                <hr>
            </div>           
           
             <div class="single-product-area">
                <form enctype="multipart/form-data" action="<?php echo BASE_URL ?>Order/confirmOrder" class="checkout" method="post" name="checkout">
                           <div id="customer_details" class="col2-set">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Thông tin gửi hàng </h3>
                                        
                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">Họ Tên<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_first_name" name="shipping_full_name" class="input-text">
                                        </p>

                                        <div class="clear"></div>
                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="Quận,huyện,.. " id="billing_address_1" name="shipping_address" class="input-text ">
                                        </p>

                                        <div class="clear"></div>

                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                            <label class="" for="billing_email">Email <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="email" value="" placeholder="example@abc.com" id="billing_email" name="shipping_email" class="input-text ">
                                        </p>

                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">Phone<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_phone" name="shipping_phone" class="input-text ">
                                        </p>
                                        <div class="clear"></div>


                                        <p id="order_comments_field" class="form-row notes">
                                            <label class="" for="order_comments">Ghi chú đơn hàng</label>
                                            <textarea cols="5" rows="2" placeholder="Ghi chú cho đơn vị vân chuyển " id="order_comments" class="input-text " name="shipping_notes"></textarea>
                                        </p>
                                    </div>
                                </div>

                                

                            </div>

                            <h3 id="order_review_heading">Đơn Hàng Của Bạn</h3>

                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        

                                    </tbody>
                                    <tfoot>

                                        <tr class="cart-subtotal">
                                            <th>Tổng Giỏ Hàng</th>
                                            <td><span class="amount">179.000.000 VNĐ</span>
                                            </td>
                                        </tr>
                                        
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                50.000 VNĐ
                                                <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                            </td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng thanh toán</th>
                                            <td><strong><span class="amount">179.050.000 VNĐ</span></strong> </td>
                                        </tr>

                                    </tfoot>
                                </table>


                                <div id="payment">
                                    

                                    <div class="form-row place-order">
                                        <input type="submit" class="button" value="Đặt hàng">
                                    </div>

                                    <div class="clear"></div>

                                </div>
                            </div>
                        </form>
    
             </div>

        </div>
 



        
        
    </main>

    <footer>
        <div class="begin-footer"></div>
        echo "Thêm footer";
    </footer>
</body>

</html>