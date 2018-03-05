/* global $ */

function validateDetails(){
    
    var pin;
    var email;
    var name;
    var address;
    var city;
    var cardno;
    var expirydate;
    var cvv;
    
    
    pin = document.getElementById("user_pin").value;
    email =document.getElementById("user_email").value;
    name = document.getElementById("user_name").value;
    address =document.getElementById("user_address").value;
    city = document.getElementById("user_city").value;
    cardno = document.getElementById("user_cardno").value;
    expirydate = document.getElementById("user_expirydate").value;
    cvv = document.getElementById("user_CVV").value;
    
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
        
      else if (email==""){
          alert("Please enter your email");
          return false 
      }
       else if (address==""){
          alert("Please enter your address")
          return false 
      }
       else if (city==""){
          alert("Please enter your city")
          return false
      }
      else if (cardno==""){
          alert("Please enter your card number")
          return false
      }
      else if (String(cardno).length<16){
          alert("Please make sure your card number is accurate")
      }
       else if (expirydate==""){
          alert("Please enter your expiry date")
          return false 
      }
      else if (cvv==""){
          alert("Please enter your CVV")
          return false
      }
      else if (String(cvv).length<3){
          alert("Please make sure your CVV is accurate")
      }
       
        else{
        enablebtnPurchase();
        }
        
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
