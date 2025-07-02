


<?php
include('../connect.php');
$id = $_GET['id'];

// Optional: delete the file from server
$calendar = mysqli_fetch_assoc(mysqli_query($conn, "SELECT file_path FROM academic_calendar WHERE id=$id"));
if ($calendar && file_exists("../uploads/calendars/" . $calendar['file_path'])) {
    unlink("../uploads/calendars/" . $calendar['file_path']);
}

mysqli_query($conn, "DELETE FROM academic_calendar WHERE id=$id");
header("Location: calendar_show.php");
?>



