<?php
$servername = "localhost";
$username = "pragmala_root";
$password = "pragmalaw@123";
$dbname = "pragmala_pragmalaw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
?>
