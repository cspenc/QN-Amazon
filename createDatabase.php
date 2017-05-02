<?php
$servername = "127.0.0.1"; //localhost
$username = "root";
$password = "mason123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE AMZN";
if ($conn->query($sql) === TRUE) {
    echo "Database AMZN created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
