<?php
$row = $About->all()[0];
?>

<div class="container">
    <h2>ABOUT</h2>
    <form action="../api/edit_about.php" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="id" id="id" value="<?= $row['id'] ?>"></td>
            </tr>
            <tr>
                <td>中文名</td>
                <td><input type="text" class="" name="name_cn" id="name_cn" value="<?= $row['name_cn'] ?>" disabled></td>
            </tr>
            <tr>
                <td>英文名</td>
                <td><input type="text" class="w-100" name="name_en" id="name_en" value="<?= $row['name_en'] ?>"></td>
            </tr>
            <tr>
                <td>信箱</td>
                <td><input type="text" class="w-100" name="email" id="email" value="<?= $row['email'] ?>"></td>
            </tr>
            <tr>
                <td>GitHub</td>
                <td><input type="text" class="w-100" name="github" id="github" value="<?= $row['github'] ?>"></td>
            </tr>
            <tr>
                <td>居住地英文</td>
                <td><input type="text" class="w-100" name="en_location" id="en_location" value="<?= $row['en_location'] ?>"></td>
            </tr>
            <tr>
                <td>居住地中文</td>
                <td><input type="text" class="w-100" name="cn_location" id="cn_location" value="<?= $row['cn_location'] ?>"></td>
            </tr>
            <tr>
                <td>英文自我介紹</td>
                <td><textarea name="en_brief" class="w-100" id="en_brief" cols="30" rows="10"><?= $row['en_brief'] ?></textarea></td>
            </tr>
            <tr>
                <td>中文自我介紹</td>
                <td><textarea name="cn_brief" class="w-100" id="cn_brief" cols="30" rows="10"><?= $row['cn_brief'] ?></textarea></td>
            </tr>
            <tr>
                <td>技能</td>
                <td><textarea name="skill" class="w-100" id="skill" cols="30" rows="10"><?= $row['skill'] ?></textarea></td>
            </tr>
        </table>
        <div>
            <input class="btn btn-sm btn-info d-inline-block" type="submit" value="確定">
            <input class="btn btn-sm btn-warning" type="reset" value="重置">
        </div>
    </form>
</div>


<!-- <div class="row mb-3">
    <div class="col-2">中文名：</div>
    <div class="col-10"><input type="text" class="w-100" name="name_cn" id="name_cn" value="<?= $row['name_cn'] ?>" disabled></div>
</div>

<div class="row mb-3">
    <div class="col-2">英文名：</div>
    <div class="col-10"><input type="text" class="w-100" name="name_en" id="name_en" value="<?= $row['name_en'] ?>"></div>
</div>

<div class="row mb-3">
    <div class="col-2">信箱：</div>
    <div class="col-10"><input type="text" class="w-100" name="email" id="email" value="<?= $row['email'] ?>"></div>


</div>
<div class="row mb-3">
    <div class="col-2">GitHub：</div>
    <div class="col-10"><input type="text" class="w-100" name="github" id="github" value="<?= $row['github'] ?>"></div>
</div>

<div class="row mb-3">
    <div class="col-2">居住地英文：</div>
    <div class="col-10"><input type="text" class="w-100" name="en_location" id="en_location" value="<?= $row['en_location'] ?>"></div>
</div>

<div class="row mb-3">
    <div class="col-2">居住地中文：</div>
    <div class="col-10"><input type="text" class="w-100" name="cn_location" id="cn_location" value="<?= $row['cn_location'] ?>"></div>
</div>

<div class="row mb-3">
    <div class="col-2">英文自我介紹：</div>
    <div class="col-10"><textarea name="en_brief" class="w-100" id="en_brief" cols="30" rows="10"><?= $row['en_brief'] ?></textarea></div>
</div>

<div class="row mb-3">
    <div class="col-2">中文自我介紹：</div>
    <div class="col-10"><textarea name="cn_brief" class="w-100" id="cn_brief" cols="30" rows="10"><?= $row['cn_brief'] ?></textarea></div>
</div>

<div class="row mb-3">
    <div class="col-2">技能：</div>
    <div class="col-10"><textarea name="skill" class="w-100" id="skill" cols="30" rows="10"><?= $row['skill'] ?></textarea></div>
</div>

<div class="row mb-3">
    <button class="btn active-button" onclick="modify()">確認修改</button>
    <button class="btn" onclick="reset()">重置</button>
</div> -->