<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
        <!--jQuery-->
        <script src "https://ajax.googleapis.com/ajax/libs/jquery,3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
      <a href="Intrests/cloud.html">Cloud Services<a/>
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
          
          <label for="cloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
              Cloud9 @ 250.
          </label>
         
          
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
         
         <label for="total">
             Total
             <input type="text" id="total" name="total" value="0.00" readonly/>
         </label>
         
         <br/>
         <div style="text-align:center";>
         <button type="submit" id="btnProceed" class="button button2" >Add to Shopping Cart</button>
          </div>
         
          </form>
          
          <br/>
          <div style="text-align:center;">
                  <button onClick="calcSub()" class="button button2">Calculate Cost</button>
          </div>
          
          <div style="text-align: center;">
        <a role="button" href="Ebus1.php" class="button button2">Clear Choice</a>
         </div>
          
          <br/>
          <div style="text-align: center;">
        <a  href="../homepage.html" class="button button2">Home</a>
         </div>
          </div>
          </body>
    </html>
  