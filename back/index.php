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
        * {
            border: 1px silver solid;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="flex-grow-2 bg-white">
            <div class="list-group list-group-flush my-3">
                <a href="?do=scheme" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="far fa-eye me-2"></i>Scheme</a>
                <a href="?do=about" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="far fa-address-card me-2"></i>About</a>
                <a href="?do=work_exp" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="far fa-building me-2"></i>WorkExp.</a>
                <a href="?do=gallery" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Gallery</a>
                <a href="?do=message" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Message</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Page Content -->
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3 px-4">
                <div class="d-flex align-items-center">
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