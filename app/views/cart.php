<!DOCTYPE html>
<html len="vi">
<head>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/headerbar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/stylesidebar.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/container.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/page/loginform.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/product.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH?>css/cartLong/style.css">
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
                <div class="product-title">Giỏ hàng của bạn(<?php echo $countCateProduct?> loại sản phẩm)<!-- dien so luong san pham o day -->
                    <hr>
                </div>                
                <div class="col-md-8 ">
                    <div class="product-content-right ">
                        <div class="woocommerce ">
                            <form method="POST" action="<?php echo BASE_URL.'cart/updateCart'?>">
                                <div class="removecart">
                                    <a style="color:#5a88ca" href="<?php echo BASE_URL."cart/freeCart"?>"><b><u>Xóa tất cả</u></b></a><!-- xóa toàn bộ sản phẩm ở đây, action case = deleteAll -->
                                </div>
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Xóa</th>
                                            <th class="product-thumbnail ">Hình ảnh</th>
                                            <th class="product-name ">Tên Sản phẩm </th>
                                            <th class="product-price ">Đơn giá</th>
                                            <th class="product-quantity ">Số lượng</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- them vong lap de dem so san pham o day -->
                                        <?php 
                                            if (!sizeof($productInCartList)>0){
                                                echo "<tr><td>Giỏ hàng trống</td></tr>";
                                            }
                                            else{
                                                foreach ($productInCartList as $key=>$value){
                                        ?>
                                            <tr class="cart_item ">
                                                <td class="product-remove">
                                                    <a title="Xóa sản phẩm này" class="remove" href="<?php echo BASE_URL."cart/deleteProductInCart/?id=".$value['id']?>" ><i class="fa fa-trash" aria-hidden="true"></i></a><!-- action name = delete, thêm id sản phẩm vào id -->
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a ><img alt="poster_1_up" class="shop_thumbnail" src="<?php echo BASE_URL.$value['img']?>"></a>
                                                </td>

                                                <td class="product-name">
                                                    <a ><?php echo $value['name']?></a>
                                                </td>

                                                <td class="product-price ">
                                                    <span class="amount"><?php echo $value['price']?></span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">                                                        
                                                        <input name="quantity[<?php echo $value['id']?>]" type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $value['count']?>" min="1" step="1"><!-- thêm id sản phẩm vào trong quantity[] -->
                                                        <input type="hidden" name="id[]" value="1">                                                        
                                                    </div>
                                                </td>                                                
                                            </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                            
                                        <tr>
                                            <td class="actions" colspan="5">
                                                <div class="order">
                                                    <input type="submit" value="Cập nhật giỏ hàng" name="apply_cart" class="button">
                                                    <!-- <a  class="button" href="http://localhost/Giaodien/order.php" >Thanh toán</a>     -->
                                                    <a  class="button" href="<?php echo BASE_URL."cart/order"?>" >Thanh toán</a>
                                                </div>                                          
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <!-- <script>loginclick(); choice(1);</script> -->
                            <!-- Thực hiện tính toán giá trị hóa đơn ở đây -->
                            <div class="cart-collaterals ">                       
                                <div class="cart_totals">
                                    <h2>Tổng thanh toán</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Tổng tiền </th>
                                                <td><?php echo $total?> VNĐ</td>
                                            </tr>
                                            
                                            <tr class="shipping">
                                                <?php $shippingFee = 30000; ?>
                                                <th>Phí ship</th>
                                                <td><?php echo $shippingFee.' VNĐ'; ?></td>
                                            </tr>
                                            <tr class="order-total ">
                                                <th>Tổng thanh toán</th>

                                                <td><strong><?php echo $total+$shippingFee.' VNĐ'; ?></strong> </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</body>
</html>