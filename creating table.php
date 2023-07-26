<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "test";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE bookinginfo (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    mobile CHAR(10) NOT NULL,
    auditorium VARCHAR(40) NOT NULL,
    booking_type VARCHAR(40) NOT NULL,
    booking_purpose VARCHAR(50) NOT NULL,
    datepicker VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table bookinginfo created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

