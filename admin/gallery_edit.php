

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

    <title>St. John's High School - Gallery</title>

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
              <div class="breadcrumb-title pe-3">Gallery</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Photos Gallery of St. John's High School</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->



            <section class="gallery">
 
 
<?php
include('../connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM gallery WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Image not found'); window.location.href='gallery_list.php';</script>";
    exit;
}

$row = mysqli_fetch_assoc($result);

// Function to generate unique file name
function generateFileName($originalName)
{
    $words = explode(' ', strtolower(pathinfo($originalName, PATHINFO_FILENAME)));
    shuffle($words);
    $short = implode('-', array_slice($words, 0, 3));
    $ext = pathinfo($originalName, PATHINFO_EXTENSION);
    return $short . '-' . time() . '.' . $ext;
}

// Update logic
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $alt_text = mysqli_real_escape_string($conn, $_POST['alt_text']);
    $target_dir = "../uploads/";

    // Update current entry details
    $update = "UPDATE gallery SET event_name='$event_name', description='$description', alt_text='$alt_text' WHERE id=$id";
    mysqli_query($conn, $update);

    // Multiple image upload handling
    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['name'] as $index => $fileName) {
            if ($_FILES['images']['error'][$index] === 0) {
                $uniqueName = generateFileName($fileName);
                $tempPath = $_FILES['images']['tmp_name'][$index];
                $fullPath = $target_dir . $uniqueName;

                if (move_uploaded_file($tempPath, $fullPath)) {
                    // Insert new images into gallery table
                    $insert = "INSERT INTO gallery (event_name, description, image_name, alt_text, uploaded_at) 
                               VALUES ('$event_name', '$description', '$uniqueName', '$alt_text', NOW())";
                    mysqli_query($conn, $insert);
                }
            }
        }
    }

    echo "<script>alert('Gallery updated successfully'); window.location.href='gallery_view.php';</script>";
    exit;
}
?>

<!-- HTML Form -->
<div class="container">
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Edit Event and Upload More Images</h6>
                        <hr>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Event Name</label>
                                <input type="text" name="event_name" class="form-control" value="<?= htmlspecialchars($row['event_name']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" required><?= htmlspecialchars($row['description']) ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alt Text (Image Title)</label>
                                <input type="text" name="alt_text" class="form-control" value="<?= htmlspecialchars($row['alt_text']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                <img src="../uploads/<?= htmlspecialchars($row['image_name']) ?>" alt="<?= htmlspecialchars($row['alt_text']) ?>" style="max-width: 200px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload More Images (Max 10–15)</label>
                                <input type="file" name="images[]" class="form-control" accept="image/*" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary">Update & Upload</button>
                            <a href="gallery_list.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



            </section>

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