<div>
    <table class="dataTable" style="width: 100%; ">
        <colgroup>
            <col span="1" style="width: 2%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 23%;">
            <col span="1" style="width: 20%">
            <col span="1" style="width: 30%">
            <col span="1" style="width: 10%">
        </colgroup>
    
        <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tên sách</th>
            <th>Loại sách</th>
            <th>Mô tả ngắn</th>
            <th>Giá</th>
            <th>Thao tác</th>
        </tr>
        <?php
         foreach($book as $key=>$value){ 
        ?>
            <tr id="item_<?php echo $value['product_id']?>">
                <td><?php echo (int)$key +1?></td>
                <td><img src="<?php echo BASE_URL.$value['product_image']?>" alt=""></td>
                <td><?php echo $value['product_name']?></td>
                <td><?php echo $value['category_name']?></td>
                <td><?php echo $value['product_desc']?></td>
                <td><?php echo $value['product_price']?></td>                
                <td class="nav">
                    <div>
                        <button>s</button>
                        <button type="button" onclick="deleteProduct(<?php echo $value['product_id']?>)">x</button>
                    </div>
                </td>
            </tr>
        <?php 
         }
        ?>            
        </tr>
    </table>
    <script>
        function deleteProduct(id){
            let xmlhttp = new XMLHttpRequest();
            let item = document.getElementById("item_"+id);
            xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        item.innerHTML = this.responseText;
                        console.log("da gui request");
                    }
            }
            console.log(<?php echo "\"".BASE_URL."\""?>+"admin/deleteProduct/"+id);
            xmlhttp.open("GET", <?php echo "\"".BASE_URL."\""?>+"admin/deleteProduct/?id="+id, true);
            xmlhttp.send();
        }
    

    </script>
</div>