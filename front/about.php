<?php
$row = $About->all()[0];
?>

<!-- About -->
<div id="about">
    <!-- pro pic & info -->
    <div id="pro-pic-info">
        <div id="div-pro-pic">
            <img src="./img/proPic2.jpeg" alt="" id="pro-pic" />
        </div>
        <div id="info">
            <ul>
                <li><?= $row['name_en'] ?></li>
                <li><?= $row['en_location'] ?></li>
                <li><?= $row['email'] ?></li>
                <li>
                    <a href="<?= $row['github'] ?>"><i class="fab fa-github" style="font-size: 2em;"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- pro pic & info end -->
    <!-- intro -->
    <div id="about_me">
        <div>
            <h2>About Me</h2>
        </div>
        <div id="intro">
            <p><?= $row['en_brief'] ?></p>
        </div>
    </div>
    <!-- intro end -->
    <!-- Features -->
    <div>
        <div id="features">
            <h2>Features</h2>
            <div id="skill_set">
                <span class="skill">HTML</span>
                <span class="skill">CSS</span>
                <span class="skill">CSS</span>
                <span class="skill">CSS</span>
            </div>
        </div>
    </div>
    <!-- Features end -->
</div>
<!-- About end -->