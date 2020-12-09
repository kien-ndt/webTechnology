<!-- <div id="container"> -->
<div id="showitem">
    <ul class="list-item">
      <?php
        foreach($book as $value){
          echo "<li class=\"item\">";
          echo "<img src=\"".$value['product_image']."\">";
          echo "<div class=\"productname\">".$value['product_name']."</div>";
          echo "<span class=\"productprice\">".$value['product_price']." vnd</span>";
          echo "</li>";
        }
      ?>
    </ul>
    <div>
      <a href="<?php echo BASE_URL?>index/homepage/1">1</a>
      <a>2</a>
      <a>3</a>
    </div>
</div>
<!-- </div> -->