<?php
$servername = "b35c538d4e254d:96e2da7c@us-cdbr-iron-east-03.cleardb.net/heroku_ccc095e992c1aba?reconnect=true"; //localhost
$username = "	b35c538d4e254d";
$password = "96e2da7c";

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
