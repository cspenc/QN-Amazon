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

$sql = "SELECT asin, title, mpn, price FROM Saved";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $asin = $row["asin"];
      $title = $row["title"];
      $mpn = $row["mpn"];
      $price = $row["price"];

      echo "<tr><td>$asin</td><td>$title</td><td>$mpn</td><td>$price</td></tr>";
    }
}
$conn->close();
?>
