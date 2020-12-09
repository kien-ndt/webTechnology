        <div class="sidebar">
            <ul style="overflow-y: auto;">
                <li><a href="#">Tất cả</a></li>
                <?php foreach($category as $value){
                    echo "<li><a href=\"#\">".$value['category_name']."</a></li>";
                }?>
            </ul>
        </div>
