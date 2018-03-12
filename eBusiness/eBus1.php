<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        
            <h2>Select Product</h2>
            
            <!--jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="cost_calc.js"></script>
    
    <style>
        body{
            background-color:#8080ff;
            color:white;
            text-align:center;
            font-family:"verdana", sans-serif;
            font-size:14px;
            
        }
        
    </style>
    
    </head>
        <body>
            <br/>
            
            <form method= "POST" action= "eBus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick= "disabledbtnProceed"/>
                &nbsp;Salesforce&nbsp;&nbsp;&nbsp; $100
            </label>
            
            <br/>
            
             <label for="aws">
                <input type="radio" id="aws" name="product" onClick= "disabledbtnProceed"/>
                &nbsp;Amazon Web Services&nbsp;&nbsp;&nbsp; $300
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick= "disabledbtnProceed"/>
                &nbsp;Cloud9&nbsp;&nbsp;&nbsp; $200
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick= "disabledbtnProceed"/>
                &nbsp;Gmail&nbsp;&nbsp;&nbsp; $400
            </label>
            <br>
            <br>
            
            
            
            <section class="calculations">
                      <label for="subtotal">&nbsp;&nbsp;Sub Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="subtotal" name ="subtotal" value="0.00" readonly>
                         <br>
                         <br>
                     
                     <label for="discounttotal">&nbsp;Discount @ 5%:&nbsp;&nbsp;&nbsp;<input type ="text" id="discounttotal" name ="discounttotal" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp; </label>&nbsp;&nbsp;
                     
                          <br>
                          <br>
                     <label for="vat" >&nbsp;&nbsp;Vat @ 10%:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="vat" name ="vat" value="0.00" readonly><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                         <br>
                         <br>
                     <label for="total" >&nbsp;&nbsp;Total: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                      <input type ="text" id="total" name ="total" value="0.00" readonly>
                 </section>
            
            <br/>
            
            <button type="submit" id="btnProceed">Add to Shopping Cart</button>
            
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role= "button" href= "eBus1.php"> Clear Choice</a>
            
            
            
            
            
            
        </body>
</html>