


<?php
include('../connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch gallery images first
    $query = "SELECT gallery FROM news_events WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $images = explode(',', $row['gallery']);

        // Delete image files
        foreach ($images as $img) {
            $file = '../uploads/' . basename(trim($img));
            if (file_exists($file)) {
                unlink($file);
            }
        }

        // Delete the record
        $deleteQuery = "DELETE FROM news_events WHERE id = $id";
        if (mysqli_query($conn, $deleteQuery)) {
            header("Location: news_event_show.php?msg=deleted");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "No record found.";
    }
} else {
    echo "Invalid ID.";
}
?>
