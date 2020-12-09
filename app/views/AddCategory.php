<?php include_once "single/admin/hearderAdmin.php"?>

<body>
    <div id="container">
        <?php include_once "single/admin/adminSidebar.php"?>
        <div id="page">
            <!-- <form id="category_product" name="addproduct" style="display: flex; flex-direction: column;" enctype="multipart/form-data" onsubmit="return false;"> -->
            <form id="category_product" 
            onsubmit="return false;" 
            name="addproduct" style="display: flex; flex-direction: column;" 
            enctype="multipart/form-data" method="POST">

                <label>Tên danh mục: </label>
                <input type="text" name="category_name" required>

                <label style="width: fit-content;">Mô tả danh mục: </label>
                <input type="text" name="category_desc">
                <span id="message"></span>
                <button type="button" onclick="submitAddCategory();">Thêm</button>
            </form>
            
            <script>
                function submitAddCategory(){
                    let form = document.forms.namedItem("category_product");
                    let dt = new FormData(form);
                    var xmlhttp = new XMLHttpRequest();
                    let message = document.getElementById("message");
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            message.innerHTML = this.responseText;
                            form.reset();
                        }
                    }
                    for(var i = 0 ; i < form.elements.length ; i++){
                        let item = form.elements.item(i);
                        if (item.name=="category_name"){
                            if(item.value==null || item.value ==""){
                                message.innerHTML="Tên danh mục không để trống";
                                return;
                            }
                        }
                    }
                    xmlhttp.open("POST", <?php echo "\"".BASE_URL."\""?>+"admin/insertCategory", true);
                    xmlhttp.send(dt);
                }
            </script>  
        </div>  
    </div>
</body>
</html>