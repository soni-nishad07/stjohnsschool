


<?php
include '../connect.php'; // DB connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $deleteQuery = "DELETE FROM contact_us WHERE id = $id";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>alert('Contact deleted successfully'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error deleting contact'); window.location.href='contact.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request'); window.location.href='contact.php';</script>";
}
?>


