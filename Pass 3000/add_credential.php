<?php
ob_start(); // Start output buffering

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $website_url = $_POST['website_url'];

    $sql = "INSERT INTO credential (title, username, password, website_url) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $username, $password, $website_url);

    if ($stmt->execute()) {
        // Redirect to the index.php after successfully adding the credential
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

ob_end_flush(); // Send the output and turn off output buffering
?>
