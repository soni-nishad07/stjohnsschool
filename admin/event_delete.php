


<?php
include '../connect.php';
$id = $_GET['id'];
$event = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM events WHERE id=$id"));
$images = explode(',', $event['images']);
foreach ($images as $img) {
    $imgPath = "../uploads/" . $img;
    if (file_exists($imgPath)) {
        unlink($imgPath);
    }
}
mysqli_query($conn, "DELETE FROM events WHERE id=$id");
header("Location: event_show.php");
?>
