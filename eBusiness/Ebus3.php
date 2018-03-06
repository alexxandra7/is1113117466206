<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
         
          <!-- CSS Features for Dropdown Menu-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total1"];
        $total = $_SESSION["total"]
        ?>
        
   <style>
         
            body {
    background-image: url(https://www.digitalplatforms.co.za/wp-content/uploads/2015/11/Website-Design-Background.png);
    background-repeat: no-repeat;
    background-size:cover;
}

/* Recepit layout */

.coupon {
    border: 5px dotted #bbb; /* Dotted border */
    width: 80%; 
    border-radius: 15px; /* Rounded border */
    margin: 0 auto; /* Center the coupon */
    max-width: 600px; 
}

.container {
    padding: 2px 16px;
    background-color: #f1f1f1;
     width: 590px;
    height: 200px;
}

.container2 {
    padding: 2px 16px;
    background-color: #f1f1f1;
     width: 590px;
    height: 50px;
}

.promo {
    background: #ccc;
    padding: 10px;
}

.expire {
    color: red;
}
    </style>
        
    </head>
    
    <body>
        
          <br/>

   <!-- Code for the menu bar -->
    <div class="w3-bar w3-dark-gray ">
    <a href="../homepage.html" class="w3-bar-item w3-button  w3-bar-item w3-button w3-hover-green"> <i class="fa fa-home"></i> Home </a>
       <div class="w3-dropdown-hover">
      <button class="w3-button w3-bar-item "><i class="fa fa-user-o"></i> About me</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="../CV/cv_page1.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">Curriculum Vitae</a>
        <a href="../Intrests/sports.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">My Intrests</a>
        <a href="../Intrests/cloudservices.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-blue">Cloud Services</a>
       
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
        <a href="../CloudServicesVendor/aboutus.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-light-green">About us</a>
        <a href="../CloudServicesVendor/aboutcloud.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-teal">About Cloud</a>
        <a href="../CloudServicesVendor/products.html" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-pink">Our Products</a>
    </div>
    </div>
    <a href="https://github.com/alexxandra7/is1113117466206" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-pink"><i class="fa fa-area-chart"></i> GitHub</a>
        <a href="https://is1113117466206.herokuapp.com/" class="w3-bar-item w3-button w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-globe"></i> HerokuApp</a>
  </div>
     
        <br/>
        <br/>
        <br/>
          
          <!--Receipt  -->
          
          
    <div class="coupon">
  <div class="container2">
    <h2 class="center"><i class="fa fa-cart-arrow-down"></i><strong>Purchase Recepit</strong></h2>
   </div>
  
  <div class="container" style="background-color:white">
    <h2><b><strong>Total Paid:</strong><?php echo $total; ?></b></h2>  <!-- Passing on the Total Amout Paid Variable-->
    <h6><strong><?php
        echo "Customer Name: " . ($_REQUEST['user_name']) ." .";  //Passing on the name variable.
        ?></strong></h6>
        <h6> <strong><?php
        echo "Customer E-Mail: ". ($_REQUEST['user_email']) ." ."; //Passing on the email variable.
        ?></strong></h6>
        <h6><strong> <?php
        echo "Address: ". ($_REQUEST['user_address']) ." .";
        ?></strong></h6>
    </div>
  <div class="container2">
    <p class=center><strong>Thank you for your purchase! <i class="fa fa-thumbs-up"></i></strong></p>
  </div>
  </div>
        </div>
        
        <br/>
        
        <div style="text-align: center;">
        <a href="../homepage.html" class="button button2">Home</a>
        </div>
     
    </body> 

</html>