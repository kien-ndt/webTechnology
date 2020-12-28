<?php include_once "single/admin/hearderAdmin.php"?>

<body>
    
    
    <div id="container">
        <?php include_once "single/admin/adminSidebar.php"?>
            <div id="page">
                <div class="admintopbar">
                    <span>Danh mục sản phẩm</span>
                </div>
            <div class="adminAddArea">
                
            <form id="category_product"
                    class="adminForm" 
                    onsubmit="return false;" 
                    name="addproduct" style="display: flex; flex-direction: column;" 
                    enctype="multipart/form-data" method="POST">

                <label>Tên danh mục: </label>
                <input type="text" name="category_name" required>

                <label style="width: fit-content;">Mô tả danh mục: </label>
                <input type="text" name="category_desc">
                <span id="mess"></span>
                <button type="button" onclick="submitAddCategory();">Thêm</button>
            </form>
            <div id="message" style="flex:2">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                    
                <?php
                    foreach ($category as $value){
                ?>
                    <tr id="category_<?php echo $value['category_id']?>">
                        <td><?php echo $value['category_id']?></td>
                        <td><?php echo htmlentities($value['category_name'])?></td>
                        <td><?php echo htmlentities($value['category_desc'])?></td>
                        <td class="nav">
                            <div>
                                <button type="button" onclick="deleteCategory(<?php echo $value['category_id']?>)">x</button>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </table>
            </div>
            </div>
            <script>
                function submitAddCategory(){
                    let form = document.forms.namedItem("category_product");
                    let dt = new FormData(form);
                    let xmlhttp = new XMLHttpRequest();
                    let mess = document.getElementById("mess");
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            mess.innerHTML = this.responseText;
                            createCategoryView();
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
                    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
                    xmlhttp.send(dt);
                }

                function createCategoryView(){
                    let xmlhttp = new XMLHttpRequest();
                    let message = document.getElementById("message");
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            message.innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", <?php echo "\"".BASE_URL."\""?>+"admin/loadCategoryList", true);
                    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
                    xmlhttp.send();
                }
                function deleteCategory(id){
                    let xmlhttp = new XMLHttpRequest();
                    let item = document.getElementById("category_"+id);
                    xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                item.innerHTML = this.responseText;
                            }
                    }
                    xmlhttp.open("GET", <?php echo "\"".BASE_URL."\""?>+"admin/deleteCategory/?id="+id, true);
                    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                    xmlhttp.send();
                }
            </script>  
        </div>  
    </div>
</body>
</html>