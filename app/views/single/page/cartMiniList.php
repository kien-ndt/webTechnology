 <!-- do controller cart phuong thuc showcart ajax -->

<ul id="miniCart">
    <?php
        // print_r($productInCartList);
        foreach ($productInCartList as $key=>$value){
    ?>
        <li>
            <img src="<?php echo BASE_URL.$value['img']?>">
            <div class="info">
                <div><?php echo $value['name']?></div>
                <div><?php echo $value['count']." x ".$value['price']?></div>
            </div>
        </li>
    <?php
        }
    ?>

    <div>Thành tiền: <?php echo $total?></div>
</ul>