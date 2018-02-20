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
        
         <!-- CSS Features for Dropdown Menu-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
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


  <div class="w3-bar w3-dark-gray ">
    <a href="../homepage.html" class="w3-bar-item w3-button  w3-bar-item w3-button w3-hover-green"> <i class="fa fa-home"></i> Home </a>
       <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "><i class="fa fa-user-o"></i> About me</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="CV/cv_page1.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">Curriculum Vitae</a>
        <a href="Intrests/sports.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">My Intrests</a>
        <a href="Intrests/cloud.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-blue">Cloud Services</a>
        <a href="https://github.com/alexxandra7/is1113117466206" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-pink">GitHub</a>
        <a href="https://is1113117466206.herokuapp.com/" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-yellow">HerokuApp</a>
      </div>
      </div>
       <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "> <i class="fa fa-shopping-cart"></i> Cloud Store</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="eBusiness/Ebus1.php" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">eBusiness</a>
     </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "> <i class="fa fa-cloud"></i> Cloud Services Vendor </button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="CloudServicesVendor/aboutus.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">About us</a>
        <a href="CloudServicesVendor/aboutcloud.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">About Cloud</a>
    </div>
    </div>
  </div>
        
        <h4 class=mainheading>Please enter your payment details.</h4>
        
            <br />
            
            <div id ="absolute"  >
            <form method = "POST" action = "Ebus3.php" >
                
                <label for="user_name">
                    Name: 
                </label>
                
                <input type="text" id="user_name" placeholder="Name">
                
                <br/>
                
                <label for="user_email">
                     E-Mail Address:
                </label>
                
                <input type="text" id="user_email" placeholder="E-Mail Address" >
                
                <br/>
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                 <br/>
                 <br/>
                    
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