/*global $*/

function calcSub(){
    
var argsubtotal;

if(document.getElementById('salesforce').checked){
    argsubtotal=100
}

if(document.getElementById('aws').checked){
    argsubtotal=300
    
}

if(document.getElementById('cloud9').checked){
    argsubtotal=200
    
}

if(document.getElementById('gmail').checked){
    argsubtotal=400
    
}
calcDisVatTotal(argsubtotal);
}


function calcDisVatTotal(parmSubTotal){
  var num1, num2, discount, vat, totalPrice;
  num1 = .05
  discount = parmSubTotal * num1;
  document.getElementById("discounttotal").value = discount;
  num2 = parmSubTotal - discount;
  vat = num2 * .10;
  totalPrice = parmSubTotal-(discount) +(vat);
  display(parmSubTotal,discount,vat,totalPrice);

}

function display(parm1,parm2,parm3,parm4){
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
  enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}
