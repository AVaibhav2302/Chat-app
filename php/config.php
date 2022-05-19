<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}
?>
