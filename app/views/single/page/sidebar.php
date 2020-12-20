<div class="menu">
    <ul style="padding: 0px; margin: 0px;">
        <li class="item">
            <a href="" class="btn">Danh mục</a>
            <div class="smenu">
                <?php 
                    echo "<a href=\"".BASE_URL."index/homepage/?page=1\">Tất cả</a>";
                ?>
                <?php foreach($category as $value){
                    echo "<a href=\"".BASE_URL."index/homepage/?page=1&category=".$value['category_name']."\">".$value['category_name']."</a>";
                }?>
            </div>
        </li>

        <li class="item">
            <a href="" class="btn">Tất cả</a>
            <div class="smenu">
                <a href="">Tất cả</a>
                <a href="">Tất cả</a>
                <a href="">Tất cả</a>
            </div>
        </li>

        <li class="item">
            <a href="" class="btn">Tất cả</a>
            <div class="smenu">
                <a href="">Tất cả</a>
                <a href="">Tất cả</a>
            </div>
        </li>
    </ul>
</div>