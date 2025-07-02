

<?php
include 'connect.php'; // Replace with your DB connection file

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $submitted_at = date("Y-m-d H:i:s"); // Current date & time

    $query = "INSERT INTO contact_us (first_name, last_name, phone, message, submitted_at) 
              VALUES ('$first_name', '$last_name', '$phone', '$message', '$submitted_at')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Thank you for contacting us! We will get back to you soon.');
              window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
