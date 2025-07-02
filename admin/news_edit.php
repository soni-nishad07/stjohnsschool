




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
include('../connect.php');

// Fetch existing data by ID
if (!isset($_GET['id'])) {
    die("ID missing");
}
$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM news_events WHERE id = $id");
$row = mysqli_fetch_assoc($result);

// Handle form submission
if (isset($_POST['update'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $date = $_POST['date'];

    $gallery = [];

    // Existing images
    if (!empty($_POST['existing_images'])) {
        $gallery = $_POST['existing_images']; // Array of image file names
    }

    // Handle new uploads
    if (!empty($_FILES['new_images']['name'][0])) {
        $upload_dir = "uploads/";
        foreach ($_FILES['new_images']['name'] as $key => $name) {
            $tmp_name = $_FILES['new_images']['tmp_name'][$key];
            $file_name = time() . "_" . basename($name);
            if (move_uploaded_file($tmp_name, $upload_dir . $file_name)) {
                $gallery[] = $file_name;
            }
        }
    }

    // Convert gallery array to comma-separated string
    $gallery_str = implode(",", $gallery);

    // Update query
    $update = "UPDATE news_events SET 
                title = '$title', 
                description = '$description',
                category = '$category', 
                date = '$date',
                gallery = '$gallery_str' 
               WHERE id = $id";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Updated successfully');
                window.location.href='news_event_show.php';
              </script>";
        exit;
    } else {
        echo "Update Failed: " . mysqli_error($conn);
    }
}
?>



    <h2>Edit News/Event</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required><?= htmlspecialchars($row['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" value="<?= htmlspecialchars($row['category']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" value="<?= htmlspecialchars($row['date']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Existing Images:</label><br>
            <?php
            $images = explode(',', $row['gallery']);
            foreach ($images as $img):
                $img = trim($img);
            ?>
                <div class="d-inline-block me-2 text-center">
                    <img src="uploads/<?= $img ?>" width="80" height="60" class="mb-1" style="object-fit: cover;">
                    <div>
                        <input type="checkbox" name="existing_images[]" value="<?= $img ?>" checked> Keep
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mb-3">
            <label>Upload More Images</label>
            <input type="file" name="new_images[]" class="form-control" multiple>
        </div>

        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="news_list.php" class="btn btn-secondary">Cancel</a>

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