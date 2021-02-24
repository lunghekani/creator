<?php

$servername = "154.0.175.165:50001";
$username = "RED";
$password = "UeJZ3M&X+835(TpP";
$dbname = base64_decode($_COOKIE['tenantDB']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>