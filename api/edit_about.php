<?php
include_once "../base.php";

foreach ($_POST['id'] as $key => $id) {
    //更新
    $data = $About->find($id);
    $data['name_en'] = $_POST['name_en'][$key];
    $data['email'] = $_POST['email'][$key];
    // $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
    dd($data);
    $About->save($data);
}


// to("../back.php?do=about");
