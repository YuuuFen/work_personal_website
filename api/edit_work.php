<?php
include_once "../base.php";

foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        //刪除
        unlink("../upload/" . $Works->find($id)['img_1']);
        $Works->del($id);
    } else {
        //更新
        $data = $Works->find($id);
        $data['title'] = $_POST['title'][$key];
        $data['intro'] = $_POST['intro'][$key];
        $data['tag'] = $_POST['tag'][$key];
        $data['demo_url'] = $_POST['demo_url'][$key];
        $data['github_url'] = $_POST['github_url'][$key];
        $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
    }
    // dd($data);
    $Works->save($data);
}

to("../back.php?do=gallery");
