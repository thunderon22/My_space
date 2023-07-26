<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "test";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE addvenue (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Auditoriumname VARCHAR(40) NOT NULL,
    capacity INT(10) NOT NULL,
    booking_type VARCHAR(30) NOT NULL,
    addrress VARCHAR(150) NOT NULL,
    booking_purpose VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table addvenue created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

