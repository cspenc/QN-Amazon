<?php

$asin = $_POST['asin'];
$title = $_POST['title'];
$mpn = $_POST['mpn'];
$price = $_POST['price'];

$servername = "localhost"; //localhost
$username = "	b35c538d4e254d";
$password = "96e2da7c";
$dbname = "AMZN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Saved (asin, title, mpn, price)
VALUES ('$asin', '$title', '$mpn', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
