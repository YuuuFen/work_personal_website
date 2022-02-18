<?php
include_once "../base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Dashboard</title>
    <style>
        /* * {
            border: 1px silver solid;
        } */
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <?php
        include "./sidebar.php";
        ?>
        <!-- Sidebar -->

        <!-- Page Content -->
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3 px-4">
                <div class="d-flex align-items-left">
                    <a href="./index.php" style="text-decoration: none"><i class="fas fa-align-left primary-text fs-4 me-3 "></i>
                        <span class="fs-2 m-0">Dashboard</span>
                    </a>
                </div>
            </nav>

            <div class="container-fluid px-4 overflow-auto">
                <?php
                $do = $_GET['do'] ?? 'title';
                $file =  $do . ".php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "title.php";
                }
                ?>
            </div>


        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>