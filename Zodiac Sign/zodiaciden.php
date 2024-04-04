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
      <a href="userinfo.php"  class="user"><img src="profileuser.png" class=""></a>
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
    <marquee><span class="greet">Let's Find Your Zodiac Sign</span></marquee>
</div>

<form>
        <div class="enter_bday" style="margin:auto;">
            <div class="zodiac_img">
                <img class="wheel" id="zodiac_sign" src="wheel.png">
                
            </div>
            <div class="input_fields">
                <!-- Using input type="date" for month and day -->
                <h2 class="zodiac_name" id="zodiacname" style="margin-left:25%;"></h2>
                <input type="date" id="birthdate" name="birthdate" require style="margin:auto;">
            </div>
            <button type="button" onclick="zodiac2()" class="btn-donate"  >Your Zodiac Sign</button>

        </div>
    
    </form>
</div>

<!-- Your JavaScript code if any -->


<script src="zodiac2.js"></script>
<script src="script.js"></script>
</body>

</html>
