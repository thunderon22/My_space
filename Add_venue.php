<!DOCTYPE html>
<html>
 <head>
  <title>Add Venue</title>
  <link rel="stylesheet" href="audit.css">
  <link rel="stylesheet" href="Add_venue.css">
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
  <form name="form" action="insertaddvenue.php" method="POST"">
  <h1>MANAGE VENUE</h1>

   <label for="Auditoriumname">AUDITORIUM NAME :</label>
   <input type="text" id="Auditoriumname" max="50" name="Auditoriumname" placeholder="enter Auditorium name" required></br>
   <label for="capacity">CAPACITY :</label>
   <input type="text" id="capacity" name="capacity" placeholder="enter capacity of Auditorium" required></br>
   
   <label for="booking_type">BOOKING TYPE :</label>
   <input type="radio" id="booking_type" name="booking_type" value="FULL DAY" checked>Full Day &nbsp;
   <input type="radio" id="booking_type" name="booking_type" value="MORNING">Morning &nbsp;
   <input type="radio" id="booking_type" name="booking_type" value="AFTERNOON">Afternoon<br>
   
   <label for="addrress">ADDRESS :</label>
   <center>
    <textarea rows="5" cols="30" name="addrress" id="addrress" required></textarea></br>
   </center>
   
   <label for="booking_purpose"><b>BOOKING PURPOSE :</b></label>
   <input type="text" id="booking_purpose" max="50" name="booking_purpose" placeholder="Event,Seminar,Talk,Reunion,etc.," required><br><br>
   
   <center>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
   </center>
   
   </form>
   </div>
 </body>
</html>
