/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
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
    
    display(argSubTotal);
}

function display(parm1){
    
    document.getElementById("subtotal").value= parm1;
    document.getElementById("total").value= parm1;
    
    enablebtnProceed();
    
    
}   
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
    
} 
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',true); 
} 

function calcDisVatTotal(){
    var  argDisVatTotal;
    
    
    
}