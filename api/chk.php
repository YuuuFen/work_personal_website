<?php
include_once "../base.php";

echo $chk = $Admin->math('count', '*', ['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

if ($chk > 0) {
    to("../back/index.php");
} else {
    to("../back/signin.php");
}
