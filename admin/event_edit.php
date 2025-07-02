




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
                    <li class="breadcrumb-item active" aria-current="page">News of St. John's High School</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->





            <?php
include '../connect.php';
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM events WHERE id=$id");
$data = mysqli_fetch_assoc($res);
$images = explode(',', $data['images']);
?>

<form action="event_update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control mb-2">
    <input type="text" name="category" value="<?= $data['category'] ?>" class="form-control mb-2">
    <textarea name="description" class="form-control mb-2"><?= $data['description'] ?></textarea>
    <input type="date" name="event_date" value="<?= $data['event_date'] ?>" class="form-control mb-2">
    
    <label>Current Images:</label>
    <div class="mb-2">
        <?php foreach ($images as $img): ?>
            <img src="../uploads/<?= $img ?>" width="80">
        <?php endforeach; ?>
    </div>

    <label>Upload New Images (optional):</label>
    <input type="file" name="images[]" multiple class="form-control mb-3">
    
    <button type="submit" name="update" class="btn btn-success">Update</button>
</form>






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