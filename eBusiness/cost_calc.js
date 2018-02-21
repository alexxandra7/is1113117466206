/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
    // If statments to calculate subtotal based on which radio button is chcecked.
    
    if(document.getElementById('salesforce').checked){
    argSubTotal=100;

  }else if(document.getElementById('cloud9').checked){
    argSubTotal=250;


 } else if(document.getElementById('gmail').checked){
    argSubTotal=150;
}
    else{ 
        argSubTotal=300;
    }
    
    
    //Calling the calcDisVatTotal function.
    calcDisVatTotal(argSubTotal);
    
   
    
}

function   display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value= parm1;
    document.getElementById("discount").value= parm2;
    document.getElementById("vat").value= parm3;
    document.getElementById("total").value= parm4;
    
    enablebtnProceed();
    
    
}   
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
    
} 
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',true); 
} 

 
 
function calcDisVatTotal(parmSubTotal){
    
    //Declaring my variables for my function
    var vatrate=0.1;
    var discount=0.05;
    var vat;
    var discount;
    var subtotal;
    var total; 
    
    subtotal = parmSubTotal;
    vat= (parmSubTotal * vatrate); //Caluclating vat by multiplying subtotal by vat rate.
    discount = (parmSubTotal * discount); //Caluclating discount amount by multiplying subtotal by discount rate.
    total= (parmSubTotal + vat - discount); //Calculating total
    
    display(subtotal, discount, vat, total); //Displaying the different values.
   ;
    
    
    
}