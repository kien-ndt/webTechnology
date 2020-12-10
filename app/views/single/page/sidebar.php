        <div class="sidebar">
            <ul style="overflow-y: auto;">
                <?php 
                    echo "<li><a href=\"".BASE_URL."index/homepage/?page=1\">Tất cả</a></li>";
                ?>
                <?php foreach($category as $value){
                    echo "<li><a href=\"".BASE_URL."index/homepage/?page=1&category=".$value['category_name']."\">".$value['category_name']."</a></li>";
                }?>
            </ul>
        </div>
