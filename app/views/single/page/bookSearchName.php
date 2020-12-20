
<ul>
    <?php
        foreach ($book as $value){
            echo "<li onclick=\"setValue(\"".$value['product_name']."\")\">".$value['product_name']."</li>";
        }
    ?>
</ul>
