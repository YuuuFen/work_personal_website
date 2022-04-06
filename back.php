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
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
    <div>
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


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>