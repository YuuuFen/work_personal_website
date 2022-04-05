<?php
include_once "./base.php";

if (!isset($_SESSION["login_sucesess"]) || ($_SESSION["login_sucesess"] == "")) {
    //回到登入頁面
    header("Location: ./front/signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style_back.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- icon -->
    <link rel="shortcut icon" href="./favicon.ico" />
    <link rel="bookmark" href="./favicon.ico" />
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar">
            <div class="nav-center">
                <div class="nav-logo">
                    <a href="#home" style="color: #555;"><img src="./img/fake_signature_1_small.png" alt=""></a>
                </div>
                <div class="nav-menu">
                    <div class="w-menu">
                        <ul>
                            <li><a href="?do=scheme">SCHEME</li>
                            <li><a href="?do=about">ABOUT</li>
                            <li><a href="?do=gallery">GALLERY</a></li>
                            <li><a href="?do=message">MESSAGE</a></li>
                            <li><a style="color: #800;" href="./api/sign_out">SIGN-OUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar end -->
    <div>
        <?php
        if (isset($_SESSION['login_sucesess'])) {
            $do = $_GET['do'] ?? '';
            $file = "back/" . $do . ".php";
            if (file_exists($file)) {
                include $file;
            }
        } else {
            include "./back/home.php";
        }
        ?>
    </div>

    <!-- JS -->
    <!-- JS end -->
</body>

</html>