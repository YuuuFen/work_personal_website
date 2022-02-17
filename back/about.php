<h2 class="text-center font-weight-bold">編輯個人資料</h2>

<?php
$about = all('about', $_GET['id']);
?>

<div>
    <?= $about['brief']; ?>
</div>