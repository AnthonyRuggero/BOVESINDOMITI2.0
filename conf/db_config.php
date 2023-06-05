<?php
$servername = "localhost";
$username = "ugvklome_admin";
$password = "libreria2023";
$dbname = "ugvklome_libreria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}