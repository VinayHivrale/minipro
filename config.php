<?php
// config.php
$servername = "database-1.c5k4ul5ztjqm.us-east-1.rds.amazonaws.com";
$username = "admin"; // Change this if necessary
$password = "uksDQEun179ejYmrATWJ"; // Change this ifuksDQEun179ejYmrATWJ necessary
$dbname = "recipes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
