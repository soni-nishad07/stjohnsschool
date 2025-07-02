


<?php
$servername = "localhost"; 
$username = "u272243666_johns_schools";
$password = "School#1234@";  // use the password you entered
$database = "u272243666_St_john";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully!";
?>
