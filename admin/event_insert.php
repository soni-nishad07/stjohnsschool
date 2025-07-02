
<?php
include '../connect.php';

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    
    $image_names = [];

    $target_dir = "../uploads/";

    foreach ($_FILES['images']['name'] as $key => $name) {
        $tmp_name = $_FILES['images']['tmp_name'][$key];
        $unique_name = time() . '_' . basename($name);
        $target_file = $target_dir . $unique_name;

        if (move_uploaded_file($tmp_name, $target_file)) {
            $image_names[] = $unique_name;
        }
    }

    $image_str = implode(',', $image_names);

    $sql = "INSERT INTO events (title, description, category, event_date, images) 
            VALUES ('$title', '$description', '$category', '$event_date', '$image_str')";
    mysqli_query($conn, $sql);
    header("Location: event_show.php");
}
?>

