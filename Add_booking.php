<!DOCTYPE html>
<head>
    <title>Add_booking</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="audit.css">
    <link rel="stylesheet" href="Add_booking.css">
    <script src="Add_booking.js"></script>
    <style>
        #navigation
        {
            background-color:lightgreen;
            border: solid lightcoral;
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
            <button onclick="window.location.href='Add_venue.php'">Manage Venue</button>
            <button onclick="window.location.href='Add_booking.php'">Add Booking</button>
            <button onclick="window.location.href='View_booking.html'">View Booking</button>
    </div>
    <div id="navigation">
        <form action="insert.php" method="POST">
            <h1>ADD BOOKING</h1>
          
             <label for="first">NAME :</label>
             <input type="text" id="first" min="3" max="30" name="first" placeholder="enter your name" required><br>
             <label for="email">EMAIL ID :</label>
             <input type="text" id="email" name="email" placeholder="xyz@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
             <label for="tel">MOBILE NUMBER :</label>
             <input type="tel" id="mobile" name="mobile"  pattern="\d{10}" placeholder="10-digit Mobile Number" required><br>
             
             <label><b>SELECT THE AUDITORIUM :</b></label>
              <select name="auditorium" id="auditorium" required>
                <option value="Savithri Bhai Phule Auditorium">Savithri Bhai Phule Auditorium</option>
                <option value="Ambedkar Auditorium">Ambedkar Auditorium</option>
                <option value="School of Life Sciences Auditorium">School of Life Sciences Auditorium</option>
                <option value="School of Humanities Auditorium">School of Humanities Auditorium</option>
              </select>
              <br>
             <label for="booking_type">BOOKING TYPE :</label>
             <input type="radio" id="booking_type" name="booking_type" value="FULL DAY" checked>Full Day &nbsp;
             <input type="radio" id="booking_type" name="booking_type" value="MORNING">Morning &nbsp;
             <input type="radio" id="booking_type" name="booking_type" value="AFTERNOON">Afternoon<br>

             <label for="booking_purpose"><b>BOOKING PURPOSE :</b></label>
             <input type="text" id="booking_purpose" max="50" name="booking_purpose" placeholder="Event,Seminar,Talk,Reunion,etc.," required><br>

             <label for="datepicker">DATE :</label> 
              <input type="text" id="datepicker" name ="datepicker" placeholder="mm/dd/yyyy" required>

             <center>
              <input type="submit" value="submit" id="submit">
              <input type="reset" value="Reset">
             </center>
    </div>
             
</form>

</body>
</html>