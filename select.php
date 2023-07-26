<!DOCTYPE html>
<head>
    <title>Booking_Details</title>
    <link rel="stylesheet" href="audit.css"> 
    <style>
        #navigation
        {
            background-color:lightgreen;
            border: solid lightcoral;
            padding-top:20px;
            padding-bottom: 250px;
            padding-left: 10px;
        }
  </style>
</head>
<body>
    <div id="header">
        <h1>Auditorium Management Website</h1>
        <img src="uoh.jpg" alt="University of Hyderabad">
        </div>
        <div id="section" align="left" class="btn-group1">
            <button onclick="window.location.href='audit.html'">Home</button>
            <button onclick="window.location.href='View_booking.html'">View Booking</button>
        </div>
        <div id="navigation">

        
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  //Retrieve form data
  $id = $_POST['search'];

  //Connect to the database
  $conn = new mysqli("127.0.0.1:3308", "root", "", "auditoriumbooking");

  //Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //Retrieve data from the database by using id
  $sql = "SELECT * FROM bookinginfo WHERE mobile = '$id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_assoc($result))   //to fetch a single row from the result set returned by MySQL database query
    {
      //echo "<div style='background-color: lightgreen; padding: 10px; border: solid lightcoral;'>";
      echo " <p style='font-weight: bold; font-size:38px;'> Full Name : " . $row["fname"]. "<br>";
      echo "Email : " . $row["email"]. "<br>";
      echo "Mobile Number : " . $row["mobile"]. "<br>";
      echo "Auditorium : " . $row["auditorium"]. "<br>";
      echo "Booking_type : " . $row["booking_type"]. "<br>";
      echo "Booking_purpose : " . $row["booking_purpose"]. "<br>";
      echo "Date : " . $row["datepicker"]. "<br>";
      echo "</p>";
      echo "</div>";
    }
  } else {
    echo "No bookings found with the given mobile number";
  }

  mysqli_close($conn);
}

?>

</div>
</body>
</html>
