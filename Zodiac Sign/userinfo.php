<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // Database connection parameters
    $servername = "sql300.infinityfree.com";
    $username = "if0_36296599";
    $password = "cjrobles2525 ";
    $database = "if0_36296599_zodiac";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user input for security
    $email = $conn->real_escape_string($_SESSION['email']);

    // Retrieve user's name from the database based on their email
    $sql = "SELECT names, birthday,email,age,gender FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch the name from the result set
        $row = $result->fetch_assoc();
        $name = $row['names'];
        $email = $row['email'];
        $age = $row['age'];
        $birthday = $row['birthday'];
        $gender = $row['gender'];
        
      
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

<div class="greet_cons">

     <h2 class="name">Name: <?php echo $name; ?></h2>
        <h3>Age: <?php echo $age; ?></h3>
        <h3>Gender: <?php echo $gender; ?></h3>
        <h3>BirthDay: <?php echo $birthday; ?></h3>
        <h3>Email: <?php echo $email; ?></h3>

        <br><br><a href="loginform.html" style="text-decoration: none;"><button type="button" class="btn-donate">Log Out &rarr;</button></a>
</div>
    
        
</div>


</div>

<!-- Your JavaScript code if any -->


<script src="zodiac.js"></script>
<script src="script.js"></script>
</body>

</html>
