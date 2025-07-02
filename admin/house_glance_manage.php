







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
          <div class="breadcrumb-title pe-3">House Glance</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">House Glance of St. John's High School</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->





      <?php
include('../connect.php');
$id = $_GET['edit'] ?? '';
$data = ['house_name' => '', 'description' => ''];

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM house_glance WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
}
?>

<form action="house_glance_crud.php" method="POST" class="p-4 border rounded mb-4"  enctype="multipart/form-data"
>
  <input type="hidden" name="id" value="<?= $id ?>">
  <div class="mb-3">
    <label>House Name</label>
    <input type="text" name="house_name" value="<?= $data['house_name'] ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" required><?= $data['description'] ?></textarea>
  </div>
    <div class="mb-3">
    <label>House Image</label>
    <input type="file" name="image" class="form-control" accept="image/*">
    <?php if (!empty($data['image'])): ?>
      <img src="../uploads/house/<?= $data['image'] ?>" width="100" class="mt-2">
    <?php endif; ?>
  </div>
  <button type="submit" name="<?= $id ? 'update' : 'save' ?>" class="btn btn-success">
    <?= $id ? 'Update' : 'Save' ?>
  </button>
</form>









<table class="table table-bordered">
  <thead>
    <tr>
      <th>House</th>
      <th>Description</th>
      <th>Image</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $res = $conn->query("SELECT * FROM house_glance");
    while ($row = $res->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['house_name'] ?></td>
      <td><?= $row['description'] ?></td>
      <td>
        <?php if ($row['image']): ?>
          <img src="../uploads/house/<?= $row['image'] ?>" width="80">
        <?php else: ?>
          <span class="text-muted">No Image</span>
        <?php endif; ?>
      </td>
      <td>
        <a href="?edit=<?= $row['id'] ?>" class="btn btn-primary btn-sm m-2">Edit</a>
        <a href="house_glance_crud.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>







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
