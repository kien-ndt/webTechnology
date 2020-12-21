<!DOCTYPE html>
<html len="vi">
    <head>
        <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/headerbar.css">
        <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/footer.css">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php include_once "single/page/login_register.php"?>
        <div>
            <?php include_once "single/page/headbar.php" ?>
        </div>
        <main class="content-area">
            <div class="product-area">
                <div class="product-title">
                    Đặt hàng
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
                                        <input type="text" value="" placeholder="" id="billing_first_name" name="shipping_full_name" class="input-text" required="true">
                                    </p>
                                    <div class="clear"></div>
                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                        <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Quận,huyện,.. " id="billing_address_1" name="shipping_address" class="input-text " required="true">
                                    </p>
                                    <div class="clear"></div>
                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                        <label class="" for="billing_email">Email <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="email" value="" placeholder="example@abc.com" id="billing_email" name="shipping_email" class="input-text " required="true">
                                    </p>
                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                        <label class="" for="billing_phone">Phone<abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_phone" name="shipping_phone" class="input-text " required="true">
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
                                        <td><span class="amount"><?php echo $total.' VNĐ'?></span>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <?php
                                                $shippingFee = 30000; 
                                                echo $shippingFee.' VNĐ'; 
                                            ?>
                                            <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng thanh toán</th>
                                        <td><strong><span class="amount"><?php echo $total+$shippingFee.' VNĐ'; ?></span></strong> </td>
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
        <div id="footer">
            <?php include_once "single/page/footer.php" ?>
        </div>
    </body>
</html>