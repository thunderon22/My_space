
<!DOCTYPE html>
<head>
    <title>Booking_Details</title>
    <link rel="stylesheet" href="audit.css">
    <style>
    #navigation
    {
        background-color:lightgreen;
        border: solid lightcoral;
        padding-top: 20px;
        padding-left: 20px;
        padding-bottom: 250px;
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
            <button onclick="window.location.href='Add_booking.php'">Add Booking</button>
            <button onclick="window.location.href='View_booking.html'">View Booking</button>
        </div>
        <div id="navigation">
    
<?php
   $fname = $_POST['first'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $auditorium = $_POST['auditorium'];
   $booking_type = $_POST['booking_type'];
   $booking_purpose = $_POST['booking_purpose'];
   $datepicker = $_POST['datepicker'];

   //database connection
   $conn = new mysqli('127.0.0.1:3308', 'root', '', 'auditoriumbooking');
   if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   }else{
    //prepare inserting the quries into the table
    $stmt = $conn->prepare("insert into bookinginfo(fname, email, mobile, auditorium, booking_type, booking_purpose, datepicker) values(?,?,?,?,?,?,?)");
    //bind the ? with proper datatype
    $stmt->bind_param("ssissss",$fname, $email, $mobile, $auditorium, $booking_type, $booking_purpose, $datepicker);
    $stmt->execute();
    echo "Booking successful";
    $stmt->close();   //closing
    $conn->close();   //closing connection
   }
?>
</div>
</body>
</html>
