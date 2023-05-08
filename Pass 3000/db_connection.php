<?php
$servername = "localhost";
$username = "wwpm_user";
$password = "pa55word!";
$dbname = "wwpm_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>