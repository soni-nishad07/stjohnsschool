







<?php
// upload.php - Script for handling image uploads
include('../connect.php');
?>




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

  <title>St. John's High School - Calender</title>

  <?php
  include('favi.php')
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
    include('top_header.php');
    ?>
    <!--end top header-->




    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Academic Approach</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Academic Approach of St. John's High School</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->






<?php include('../connect.php'); ?>

<?php
if (isset($_POST['upload'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    if ($_FILES['calendar_file']['name']) {
        $filename = basename($_FILES['calendar_file']['name']);
        $target_dir = "../uploads/calendars/";
        $target_file = $target_dir . $filename;
        move_uploaded_file($_FILES['calendar_file']['tmp_name'], $target_file);

        $query = "INSERT INTO academic_calendar (title, file_path) VALUES ('$title', '$filename')";
        mysqli_query($conn, $query);
        echo "<script>alert('Calendar uploaded successfully.');window.location='calendar_show.php';</script>";
    } else {
        echo "<script>alert('Please select a file to upload.');</script>";
    }
}
?>

<form method="POST" enctype="multipart/form-data" class="p-4 card shadow">
    <h5 class="mb-3">Upload Academic Calendar</h5>
    <div class="mb-3">
        <label class="form-label">Calendar Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">PDF File</label>
        <input type="file" name="calendar_file" class="form-control" accept=".pdf" required>
    </div>
    <button type="submit" name="upload" class="btn btn-success">Upload</button>
</form>





      </div>
      <!-- end page content-->
    </div>







    

    <div class="footer-container">
      <h6 class="text-center copyright">
        COPYRIGHT @ <script>
          document.write(new Date().getFullYear());
        </script>
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
    include('custom_theme.php');
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
