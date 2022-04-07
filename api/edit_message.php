<?php
include_once "../base.php";

foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Message->del($id);
    } else {
        //更新
        $data = $Message->find($id);
        $data['name'] = $_POST['name'][$key];
        $data['company'] = $_POST['company'][$key];
        $data['email'] = $_POST['email'][$key];
        $data['subject'] = $_POST['subject'][$key];
        $data['content'] = $_POST['content'][$key];
        $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
    }
    // dd($data);
    $Message->save($data);
}


to("../back.php?do=message");
