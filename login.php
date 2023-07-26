<?php
// Configuration
$host = "localhost";
$port = 3308;
$user = "root";
$password = "";
$db = "auditoriumbooking";
$table = "users";

// Connect to MySQL
$link = mysqli_connect($host, $user, $password, $db, $port);
if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

// Check if login form is submitted
if (isset($_POST['login'])) {
    // Retrieve the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate email format for username
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid username format. Please enter a valid email address.";
    } else {
        // Validate password requirements
        $uppercase = preg_match('/[A-Z]/', $password);
        $lowercase = preg_match('/[a-z]/', $password);
        $number = preg_match('/\d/', $password);
        $symbol = preg_match('/[^A-Za-z0-9]/', $password);

        if (!$uppercase || !$lowercase || !$number || !$symbol) {
            $error = "Invalid password. Password must contain at least one uppercase letter, one lowercase letter, one symbol, and one number.";
        } else {
            // Fetch user record from the database
            $query = "SELECT * FROM $table WHERE username = '$username'";
            $result = mysqli_query($link, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                // Verify the entered password against the stored password
                if ($password === $user['password']) {
                    // Redirect to the home page or any other desired page
                    header('Location: Admin_Dashboard.html');
                    exit();
                }
            }

            // Invalid credentials
            $error = "Invalid credentials. Please try again.";
        }
    }
}

// Close the database connection
mysqli_close($link);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="audit.css">
    <link rel="stylesheet" href="login.css">
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
            <button onclick="window.location.href='login.php'">Admin Login</button>
        </div>
    <div align="center" id="navigation">
    <div class="container">
        <h1>Login</h1>
        <img src="1.png" alt="showadmin" id="img"> <br><br>
        <?php if (isset($error)) : ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="enter your username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="enter your password" required>

            <center><input type="submit" name="login" value="Login"></center>
        </form>
    </div>
    </div>
</body>
</html>

