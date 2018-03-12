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
  var num1, num2, num3, discount, vat, total;
  num1 = .05
  discount = parmSubTotal * num1;
  document.getElementById("discounttotal").value = discount;
  num2 = parmSubTotal - discount;
  vat = num2 * .10;
  total = parmSubTotal-(discount) +(vat);
  display(parmSubTotal,discount,vat,total);

}

function display(parm1,parm2,parm3,parm4){
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discounttotal").value = parm2;
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
