<?php
include_once "../base.php";

echo $chk = $Admin->math('count', '*', ['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

if ($chk > 0) {
    $_SESSION['login_sucesess'] = $_POST['acc'];
    to("../back.php");
} else {
    echo "<script>";
    echo "alert('帳號或密碼錯誤');";
    // echo "location.href='../index.php?do=login';";
    echo "location.href='../front/signin.php';";
    echo "</script>";
}
