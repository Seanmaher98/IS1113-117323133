/*global $*/

function calcSub(){
    
var argsubtotal

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




display(argsubtotal);
}

function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
     document.getElementById("total").value = parm1;

    enablebtnproceed();
}


function enablebtnproceed(){
    $('#btnproceed').prop('disabled',false);
}

function disablebtnproceed(){
     $('#btnproceed').prop('disabled',true);
}