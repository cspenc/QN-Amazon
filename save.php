<?php

$asin = $_POST['asin'];
$title = $_POST['title'];
$mpn = $_POST['mpn'];
$price = $_POST['price'];

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

$sql = "INSERT INTO Saved (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
