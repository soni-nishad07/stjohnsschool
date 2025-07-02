

<!-- 

username: abc1
email: abc1@gmailc.com
password: 123


-->





<?php
// session_start();

$conn = mysqli_connect("localhost","root","","stjohnsschool");

mysqli_select_db($conn,"stjohnsschool");

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>