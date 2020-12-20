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
            <td><?php echo $value['category_name']?></td>
            <td><?php echo $value['category_desc']?></td>
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