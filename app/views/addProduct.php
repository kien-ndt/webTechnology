<!-- <!DOCTYPE html> -->
<?php include_once "single/admin/hearderAdmin.php"?>
<body>
    <div id="container">
        <?php include_once "single/admin/adminSidebar.php"?>
        <div id="page">
            <form id="addproduct" name="addproduct" style="display: flex; flex-direction: column;" enctype="multipart/form-data" onsubmit="return false;">
                <label>Tên sách: </label>
                <input type="text" value="harray dũng cảm" name="name">
                <label>Ảnh: </label>
                <input type="text" value="harray dũng cảm" name="img">
                <label>Tác giả: </label>
                <input type="text" maxlength="25" value="harray dũng cảm" name="author">
                <label>Giá bán </label>
                <input type="number" name="price">
                <label>Lĩnh vực: </label>
                <input type="text" value="harray dũng cảm" name="category">
                
                <label>Ảnh bìa sách:</label>
                <div class="inputImg">                    
                    <img src="img/addImg.png" onClick="triggerClick()" id="profileDisplay">
                    <input type="file" accept=".jpg,.png,.jpeg" name="profileImage" onChange="displayImage(this)" id="profileImage" style="display: none;">
                </div>

                <button type="button" onclick="submitAddProduct()";>Thêm</button>
                <span id=resultaddproduct></span>
            </form>
            
    <script>
        function submitAddProduct(){
            let form = document.getElementById("addproduct");
            form1 = document.forms.namedItem("addproduct");
            dt = new FormData(form1);
            var xmlhttp = new XMLHttpRequest();
            let res = document.getElementById("resultaddproduct");
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    res.innerHTML += this.responseText;
                    // form.reset();
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
                    document.getElementById('profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
                }
            }
    </script>  
        </div>  
    </div>
</body>
</html>