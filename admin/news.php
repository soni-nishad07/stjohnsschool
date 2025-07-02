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

  <title>St. John's High School - News</title>

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
          <div class="breadcrumb-title pe-3">News</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">News & Event of St. John's High School</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->







        <?php
        $id = $_GET['edit'] ?? '';
        $data = ['title' => '', 'description' => '', 'category' => '', 'date' => '', 'gallery' => ''];
        if ($id) {
          $get = $conn->prepare("SELECT * FROM news_events WHERE id=?");
          $get->bind_param("i", $id);
          $get->execute();
          $data = $get->get_result()->fetch_assoc();
        }
        ?>

        <form action="news_event_crud.php" method="post" enctype="multipart/form-data" class="p-4 border rounded">
          <input type="hidden" name="id" value="<?= $id ?>">
          <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required value="<?= $data['title'] ?>">
          </div>
          <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required><?= $data['description'] ?></textarea>
          </div>
          <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" required value="<?= $data['category'] ?>">
          </div>
          <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required value="<?= $data['date'] ?>">
          </div>
          <div class="mb-3">
            <label>Event Images (Max 5)</label>
            <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            <?php if (!empty($data['gallery'])): ?>
              <p class="mt-2">Existing: <?= implode(', ', explode(',', $data['gallery'])) ?></p>
            <?php endif; ?>
          </div>
          <button type="submit" name="<?= $id ? 'update' : 'save' ?>" class="btn btn-primary"><?= $id ? 'Update' : 'Submit' ?></button>
        </form>



      </div>
      <!-- end page content-->
    </div>








    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3 pb-5"><b>Event Add</b></div>
        </div>
        <!--end breadcrumb-->

        <form action="event_insert.php" method="POST" enctype="multipart/form-data" class="row g-3 p-4 border rounded">
          <div class="col-md-6">
            <label class="form-label">Event Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
          </div>
          <div class="col-md-6">
            <label class="form-label">Event Date</label>
            <input type="date" name="event_date" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Upload Images</label>
            <input type="file" name="images[]" multiple class="form-control">
          </div>
          <div class="col-12">
            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
          </div>
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