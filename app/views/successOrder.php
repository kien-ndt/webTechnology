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
                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </nav>
                </div>

            </div>
        </div> -->
    </header>
    <main>
        <div class="image">
            <img src="img/tick.png" >
        </div>
        <div class="report">
            <p>Cảm ơn bạn đã mua sản phẩm, đơn hàng của bạn đã được hệ thống ghi nhận!</p>
            <a style="color:#5a88ca" href="http://localhost/webTechnology"><b><u>Quay lại trang chủ!</u></b></a>
        </div>
    </main>
    <footer>
        echo "Thêm footer";
        <!-- <div class="begin-footer"></div>
        <div class="footer-contact content-area">
            <table>
                <tr>
                    <th>thông tin công ty</th>
                    <th>hỗ trợ khách hàng</th>
                    <th>kết nối với chúng tôi</th>
                    <th>dịch vụ khách hàng</th>
                </tr>
                <tr class="first-line">
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn mua hàng</td>
                    <td><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</td>
                    <td><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0961-822-743 <br>
                        <span style="font-size: 12px;">(Từ 8h đến 20h tất cả các ngày)</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Tin tuyển dụng</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo hành thiết bị</td>
                    <td><i class="fa fa-google" aria-hidden="true"></i> Google</td>
                    <td><i class="fa fa-envelope" aria-hidden="true"></i> Duchoang1234@gmail.com</td>
                </tr>
                <tr>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chương trình khuyến mãi</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo mật thông tin</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Qui định và hình thức thanh toán</td>
                </tr>
            </table>
        </div>
        <div class="footer-info">
            <div class="footer-content content-area">
                <div class="company-name" style="font-size: 20px;"> CÔNG TY ABC ABC.COM</div>
                <div class="logo-industry-trade"><img src="img/da-dang-ky-voi-bo-cong-thuong.png" alt="Bộ công thương"></div>
                <div class="industry-trade-info" style="font-size: 13px;">GPĐKKD số: 7777777. Cấp lần 1: 10/10/2015. Thay đổi: 10/10/2010. Nơi cấp: Phòng đăng ký kinh doanh Sở kế hoạch đầu tư TP Hồ Chí Minh</div>
                <div class="branch">
                    <table>
                        <tr>
                            <th>trụ sở chính</th>
                            <th>văn phòng đại diện</th>
                        </tr>
                        <tr>
                            <td>Địa Chỉ: 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</td>
                            <td>Địa Chỉ : 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</td>
                        </tr>
                        <tr>
                            <td>Điện thoại: 0923-032-992</td>
                            <td>Điện thoại: 0923-032-992</td>
                        </tr>
                        <tr>
                            <td>Email: sales@webextrasite.com</td>
                            <td>Email: sales@webextrasite.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
    </footer>
</body>

</html>