









<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <title>St. John's High School - News</title>

    <?php
    include 'favi.php';
    ?>

</head>


<body>


    <!--start wrapper-->
    <div class="wrapper">




        <!--start sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!--end sidebar -->





        <!--start top header-->
        <?php
        include 'top_header.php';
        ?>
        <!--end top header-->




        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">News</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Display News Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->



<?php
include('../connect.php');
$result = $conn->query("SELECT * FROM academic_approach ORDER BY id DESC");
?>

<div class="container mt-4">
    <h3>Academic Approach List</h3>
    <a href="home.php" class="btn btn-success mb-3">Add New</a>

    <table class="table table-bordered">
        <thead class="table-light text-center">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td>
                    <a href="home.php?edit=<?= $row['id'] ?>" class="btn btn-sm btn-primary m-2">Edit</a>
                    <a href="academic_crud.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure to delete this entry?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>


            </div>
            <!-- end page content-->
        </div>





        <div class="footer-container">
    <h6 class="text-center copyright">
        COPYRIGHT @ <script>document.write(new Date().getFullYear());</script>
        St. John's High School, ALL RIGHTS RESERVED. Designed by
        <span>
            <a href="https://www.rpinfocare.com/">Rp Infocare</a>
        </span>
    </h6>
</div>





        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
        <!--End Back To Top Button-->




        <!--start switcher-->
        <?php
        include 'custom_theme.php';
        ?>
        <!--end switcher-->






        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->





    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


</body>

</html>