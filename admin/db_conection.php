<?php

$servername = "localhost";
$username = "root";
$db_password = "";
$db = "school-manag-sys";

// Create connection
$conn = new mysqli($servername, $username, $db_password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>