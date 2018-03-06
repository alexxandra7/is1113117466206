<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
       <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        $total = $_SESSION["total"]
        ?>
        
        <title> Checkout</title>
        
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
        <!-- -->
    <br/>

<!--This is the code for the dropdown navigation menu--> 

 
     <div class="w3-bar w3-dark-gray ">
    <a href="../homepage.html" class="w3-bar-item w3-button  w3-bar-item w3-button w3-hover-green"> <i class="fa fa-home"></i> Home </a>
       <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "><i class="fa fa-user-o"></i> About me</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="CV/cv_page1.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">Curriculum Vitae</a>
        <a href="Intrests/sports.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">My Intrests</a>
        <a href="Intrests/cloudservices.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-blue">Cloud Services</a>
       
      </div>
      </div>
       <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "> <i class="fa fa-shopping-cart"></i> Cloud Store</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="../eBusiness/Ebus1.php" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">eBusiness</a>
     </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "> <i class="fa fa-cloud"></i> Cloud Services Vendor </button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="CloudServicesVendor/aboutus.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">About us</a>
        <a href="CloudServicesVendor/aboutcloud.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">About Cloud</a>
        <a href="CloudServicesVendor/products.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-pink">Our Products</a>
    </div>
    </div>
    <a href="https://github.com/alexxandra7/is1113117466206" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-pink"><i class="fa fa-area-chart"></i> GitHub</a>
        <a href="https://is1113117466206.herokuapp.com/" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-globe"></i> HerokuApp</a>
  </div>

  
         <br/>
        <h2 class=mainheading> <strong>Please enter your payment details.</strong></h2>
        
        <!--Form for entering customers payment details -->
        
                <div id="absolute">
                <form method ="POST" action ="Ebus3.php">
                
                <label for="total1">
                    <strong>Total: </strong>
                    <input type="text" id="total1" name="total1" value=" $<?php echo $total; ?>" readonly>
                </label>
                
                <h6><strong>Billing Address</strong></h6>
                <label for="user_name">
                    Full Name:
                </label>
                
                <input type="text" id="user_name" name="user_name" placeholder="Name">
                
                <br/>
                
                <label for="user_email">
                     E-Mail:
                </label>
                
                <input type="text" id="user_email" name="user_email" placeholder="E-Mail" >
                
                 <label for="user_address">
                    Address:
                </label>
                
                <input type="text" id="user_address" name="user_address" placeholder="Address">
                
                <br/>
                
                <label for="user_city">
                    City:
                </label>
                
                <input type="text" id="user_city" name="user_city" placeholder="City">
                <br/>
                    <label for="country">Country</label>
                    <select id="country" name="country">
                     <option value="ireland">Ireland</option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                     <option value="uk">UK</option>
                     <option value="france">France</option>
                     <option value="poland">Poland</option>
                     <option value="australia">Australia</option>
                     </select>
                 
                
                <h6><strong>Payment</strong></h6>
                <h6>Accepted Cards </h6>
                
                <!-- Icons for credit cards-->
                
                 <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                
                <br/>
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <br/>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                 <br/>
                 
                  <label for="user_cardno">
                     Card Number:
                </label>
                
                <input type="text" id="user_cardno" placeholder="Card Number" maxlength="16">
                
                <br/>
                
                 <label for="user_expirydate">
                     Expiry Date:
                </label>
                
                <input type="text" id="user_expirydate" placeholder="Expiry Date" maxlength="5">
                
                <br/>
                
                 <label for="user_CVV">
                     CVV:
                </label>
                
                <br/>
                
                <input type="password" id="user_CVV" placeholder="CVV" maxlength="3">
                 <br/>
                 <br/>
                 
                  <button type="Submit" id="btnPurchase" class="button button2" > 
                    Proceed with Purchase 
                     </button>
               
                </form>
               
                     
            <button class="button button2" onClick="validateDetails()"> Validate </button>
             </div>
             
        <script type="text/javascript" src="ebus2_validator.js"></script>
       
         </body>
    
</html>