<?php
$row = $Works->all();
?>

<div id="gallery">
    <div>
        <h2>Gallery</h2>
    </div>
    <?php
    foreach ($row as $value) {
        echo "<div class='card_img'>";
        echo "<img src='./upload/{$value['img_1']}' style='max-height: 200px;'>";
        echo "</div>";
        echo "<div class='card_body'>";
        echo "<h3>{$value['title']}</h3>";
        echo "<li>{$value['intro']}</li>";
        echo "<li>主要技術：{$value['tag']}</li>";
        echo "</div>";
    }
    ?>
    <div class="card-body">
        <div class="card-img"><img src="https://fakeimg.pl/320x180/ffeecc/" alt=""></div>
        <div>
            <ul>
                <li>
                    <h3 class="card-title">Calender</h3>
                </li>
                <li>one sentence</li>
            </ul>
        </div>
    </div>
</div>

</div>
<!-- Gallery end -->