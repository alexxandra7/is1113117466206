<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
         
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
     
        <h4 class="mainheading">RECEIPT</h4>
        
        <div id ="absolute" class="font" >
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $SESSION ["total"] ." .";
        ?>
        </div>
    </body>
</html>