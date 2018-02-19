<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
            body {
    background-image: url(https://www.digitalplatforms.co.za/wp-content/uploads/2015/11/Website-Design-Background.png);
    background-repeat: no-repeat;
    background-size:cover;
}

   

        </style>
        
    </head>
    
    <body>
        
    <br/>
<ul>
    <li><a class="active" href="homepage.html">Home</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Me</a>
    <div class="dropdown-content">
      <a href="CV/cv_page1.html">Curriculum Vitae</a>
      <a href="Intrests/sports.html">Interests</a>
      <a href="Intrests/cloud.html">Cloud Services</a>
      <a href="https://github.com/alexxandra7/is1113117466206">GitHub</a>
    </div>
      <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Cloud Store</a>
      <div class="dropdown-content">
      <a href="eBusiness/Ebus1.php">eBusiness</a>
      </div>
      <li><a href="Intrests/aboutcloud.html">About Cloud</a></li>
     </li>
 </ul>
        
        
        <h4 class=mainheading>Please enter your payment details.</h4>
        
            <br />
            
            <div id ="absolute"  >
            <form method = "POST" action = "Ebus3.php" >
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" > 
                    Proceed with Purchase 
                </button>
                
            </form>
            <br/>
            <div class="text-align:center";>
             <button class="button button2" onClick="validateDetails()"> Validate </button>
             </div>
            
            <br />
            
            
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
             
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
    
</html>