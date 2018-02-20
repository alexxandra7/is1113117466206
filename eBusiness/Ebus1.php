

<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
        <!--jQuery-->
        <script src "https://ajax.googleapis.com/ajax/libs/jquery,3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
     
     <br/>
        
          <h4 class="mainheading">Select a Product</h4>
          
          <br/>
          
          <div id ="absolute" class="font" >
          <form method="POST" action="Ebus2.php">
          
          <label for="salesforce">
          <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
          SalesForce @ $100
          </label>
          
          <br/>
          
          <label for="aws">
          <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
          AWS @ $300
          </label>
          
          <br/>
          
          <label for="cloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
              Cloud9 @ 250.
          </label>
         
         <br/>
          
          <label for="gmail">
          <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
          gMail @ $150
          </label>
          
          <br/>
          <br/>
          
          <label for="subtotal">
              Sub Total
              <input type="text" id="subtotal" value="0.00" readonly/>
         </label>
         
         <br/>
         
         <label for="discount">
             Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
         </label>
         
         <br/>
         
         <label for="vat">
             Vat @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
         </label>
         
         <label for="total">
             Total
         <input type="text" id="total" name="total" value="0.00" readonly/>
         </label>
         
         <br/>
         <br/>
         <div style="text-align:center";>
         <button type="submit" id="btnProceed" class="button button2" >Add to Shopping Cart</button>
          </div>
         
          </form>
          
          <div style="text-align:center;">
                  <button onClick="calcSub()" class="button button2">Calculate Cost</button>
          </div>
          
          <div style="text-align: center;">
        <a role="button" href="Ebus1.php" class="button button2">Clear Choice</a>
         </div>
         
          <div style="text-align: center;">
        <a  href="../homepage.html" class="button button2">Home</a>
         </div>
          </div>
          
          
          </body>
    </html>
  