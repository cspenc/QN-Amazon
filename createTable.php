<?php
$servername = "127.0.0.1"; //localhost
$username = "root";
$password = "mason123";
$dbname = "AMZN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Saved (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
asin TEXT,
title TEXT,
mpn TEXT,
price TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Saved created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
