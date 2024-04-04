<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "zodiac";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user input for security
    $email = $conn->real_escape_string($_SESSION['email']);

    // Retrieve user's name from the database based on their email
    $sql = "SELECT names, birthday FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch the name from the result set
        $row = $result->fetch_assoc();
        $name = $row['names'];
        $birthday = $row['birthday'];
    } else {
        // Handle if user's name is not found
        $name = "User";
    }

    // Close connection
    $conn->close();
} else {
    // Redirect the user to the login page if they are not logged in
    header("Location: login.html");
    exit(); // Terminate the script to prevent further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Left Side Navigation Bar</title>

  <link rel="stylesheet" href="styles.css"/>
</head>

<body>
<div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      <!-- More span elements -->
   </div>


<div class="navigation">
    <div class="navbtn">
     
      <a href="home.php" class="btnnav" id ="changeColorBtn" target="iframe_a">Home</a>
      <a href="zodiaciden.php"class="btnnav" target="iframe_a">Zodiac Identifier</a>
      <a href="about.html"class="btnnav">About</a>
      <a href="userinfo.php" class="user"><img src="profileuser.png" class=""></a>
    </div>
  
  
    </div>
  
  
   
    <div class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php" class="btnnav" id ="changeColorBtn">Home</a>
      <a href="zodiaciden.php"class="btnnav" >Zodiac Identifier</a>
      <a href="about.html"class="btnnav">About</a>
      <a href="userinfo.php" class="btnnav">Profile</a>
    </div>
  
    
  
    <div class="content">
    <img src ="burger-bar.png" class="openbtn" onclick="openNav()">
      <!-- Your content here -->
    </div>  

<div class="contents">

<div class="greet_con">
    <marquee><span class="greet">Welcome to Zodiac App</span>&nbsp<span class="userN"><?php echo $name; ?></span></marquee>
</div>

<form>
        <div class="enter_bday">
            <div class="zodiac_img">
                <img class="wheel" id="zodiac_sign" src="wheel.png">
            </div>
            <div class="input_fields">
                <!-- Using input type="date" for month and day -->
                <input type="date" id="birthdate" name="birthdate" readonly value ="<?php echo $birthday; ?>" onchange="zodiac()">
            </div>

        </div>
    
        <div class="zodiac_result">
         
            <h2 class="zodiac_name" id="zodiacname"></h2>
            <p class="tresult" id="result"></p>
        </div>
    </form>
</div>

<!-- Your JavaScript code if any -->


<script src="zodiac.js"></script>
<script src="script.js"></script>
</body>

</html>
