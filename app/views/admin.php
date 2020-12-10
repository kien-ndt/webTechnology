
<?php include_once "single/admin/hearderAdmin.php"?>
<body>
    <div id="container">
        <?php include_once "single/admin/adminSidebar.php"?>
        <div id="page">
            <div class="admintopbar">
                <span>Danh sách sản phẩm quản lý</span>
                <a href=<?php echo BASE_URL."admin/addProduct"?>>Thêm sản phẩm</a>
            </div>
            <div class="filterBar">
                <div>
                    <span>Tìm: </span>
                    <input type="text">
                </div>
            </div>
            <div>
                <?php include "single/admin/productList.php"?>
            </div>
        </div>  
    </div>    
</body>
</html>