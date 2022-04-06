<?php
include_once "../base.php";

if (!empty($_FILES['img_1']['tmp_name'])) {
    move_uploaded_file($_FILES['img_1']['tmp_name'], "../upload/" . $_FILES['img_1']['name']);
    $data['img_1'] = $_FILES['img_1']['name'];
}
$data['title'] = $_POST['title'];
$data['intro'] = $_POST['intro'];
$data['tag'] = $_POST['tag'];
$data['demo_url'] = $_POST['demo_url'];
$data['github_url'] = $_POST['github_url'];
// dd($data);

$Works->save($data);
to("../back.php?do=gallery");
