



<?php
include '../connect.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];

    $existing = mysqli_fetch_assoc(mysqli_query($conn, "SELECT images FROM events WHERE id=$id"));
    $old_images = $existing['images'];

    $uploaded_images = [];

    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['name'] as $key => $name) {
            $tmp_name = $_FILES['images']['tmp_name'][$key];
            $unique_name = time() . '_' . basename($name);
            move_uploaded_file($tmp_name, "../uploads/$unique_name");
            $uploaded_images[] = $unique_name;
        }
        $image_str = implode(',', $uploaded_images);
    } else {
        $image_str = $old_images;
    }

    $sql = "UPDATE events SET title='$title', category='$category', description='$description', 
            event_date='$event_date', images='$image_str' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: event_show.php");
}
?>
