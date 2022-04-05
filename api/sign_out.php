<?php include_once "../base.php";

//使用unset()函式來移除session中的user紀錄，達到登出使用者的效果
unset($_SESSION['login_sucesess']);

//使用者登出後，導向回首頁
to("../index.php");
