<?php
include_once "../base.php";

//把資料用id這個欄位的值取出來
$data = $About->find($_POST['id']);

//把$_POST中的欄位名和值分開成key和val兩個變數
foreach ($_POST as $key => $val) {
    // 更新
    // 排除id欄位
    if ($key != 'id') {
        //將每個表單傳來的值依照對應的欄位名稱寫入到資料中
        $data[$key] = $val;
    }
    // dd($data);
    $About->save($data);
}

to("../back.php?do=about");
