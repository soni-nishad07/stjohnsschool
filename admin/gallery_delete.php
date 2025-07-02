

<?php
include('../connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the image name before deletion
    $res = mysqli_query($conn, "SELECT image_name FROM gallery WHERE id = $id");
    $row = mysqli_fetch_assoc($res);

    if ($row) {
        $image_path = "../uploads/" . $row['image_name'];
        if (file_exists($image_path)) {
            unlink($image_path); // delete image file
        }

        // Delete DB record
        $delete = mysqli_query($conn, "DELETE FROM gallery WHERE id = $id");
        if ($delete) {
            echo "<script>alert('Image deleted successfully'); window.location.href='gallery_view.php';</script>";
            exit;
        } else {
            echo "<script>alert('Failed to delete from database'); window.location.href='gallery_view.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Image not found'); window.location.href='gallery_view.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Invalid request'); window.location.href='gallery_view.php';</script>";
}
?>
