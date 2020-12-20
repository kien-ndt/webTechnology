
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
                    <input type="text" id='searchstring' onkeydown="startSearch()">
                </div>
            </div>
            <div id="productList">
                <?php include "single/admin/productList.php"?>
            </div>
        </div>  
    </div>
    <script>
        var t; // public variable for the timeout
        function startSearch(){
            if (t) window.clearTimeout(t);
            t = window.setTimeout("search()",200);
        }
        function search(){
            let xmlhttp = new XMLHttpRequest();
            if (!xmlhttp) alert("Request error!");
            query = document.getElementById("searchstring").value;
            list = document.getElementById("productList");
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    list.innerHTML = this.responseText;
                    // form.reset();
                }
            }
            xmlhttp.open("GET", "<?php echo BASE_URL?>admin/searchProduct/?query="+query, true);
            xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
            xmlhttp.send();
        }
    


    </script>    
</body>
</html>