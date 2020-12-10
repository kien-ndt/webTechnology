<!-- <!DOCTYPE html> -->
<?php include_once "single/admin/hearderAdmin.php"?>
<body>
    <div id="container">
        <?php include_once "single/admin/adminSidebar.php"?>
        <div id="page">
            <div class="adminAddArea">
                
            <form class ="adminForm" id="addproduct" name="addproduct" enctype="multipart/form-data" onsubmit="return false;">
                <label>Tên sách: </label>
                <input type="text" name="product_name">
                <label>Thể loại: </label>
                <!-- <input type="text" value="harray dũng cảm" name="category_id"> -->
                <select id="theloai" name="category_id">
                    <?php
                        foreach($category as $value){
                            echo "<option value=\"".$value['category_id']."\">".$value['category_name']."</option>";
                        }
                    
                    ?>
                </select>
                <!-- <label>Giá: </label>
                <input type="text" maxlength="25" value="harray dũng cảm" name="author"> -->
                <label>Giá bán: </label>
                <input type="number" name="product_price">
                <label>Mô tả: </label>
                <input type="text" name="product_desc">
                
                <label>Ảnh bìa sách:</label>
                <div class="inputImg">                    
                    <img src="../public/img/addImg.png" onClick="triggerClick()" id="imgDisplay">
                    <input type="file" accept=".jpg,.png,.jpeg" name="profileImage" onChange="displayImage(this)" id="profileImage" style="display: none;">
                </div>

                <button type="button" onclick="submitAddProduct()";>Thêm</button>
            </form>
            
            <div id="message">aaaaaaaaaaa</div>
            </div>
    <script>
        function submitAddProduct(){
            let form = document.getElementById("addproduct");
            form1 = document.forms.namedItem("addproduct");
            dt = new FormData(form1);
            var xmlhttp = new XMLHttpRequest();
            let message = document.getElementById("message");
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    message.innerHTML += this.responseText;
                    form.reset();
                }
            }
            var data ="";
            for(var i = 0 ; i < form.elements.length ; i++){
                var item = form.elements.item(i);
            }
            console.log(dt);
            xmlhttp.open("POST", <?php echo "\"".BASE_URL."\""?>+"admin/insertProduct", true);
            // xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xmlhttp.send(dt);
        }
        function triggerClick(e) {
            document.querySelector('#profileImage').click();
        }

        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    document.getElementById('imgDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
                }
            }
    </script>  
        </div>  
    </div>
</body>
</html>