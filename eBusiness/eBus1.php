<!DOCTYPE html>
<html>
    <head>
        
            <h4>Select Product</h4>
            
            <!--jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type= "text/javascript" src="cost_calc.js"></script>
    </head> 
                
            
            
            
            <br/>
            
            <form method= "Post" action= "Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick= "disabledbtnproceed"/>
                salesforce @$100
            </label>
            
            <br/>
            
             <label for="aws">
                <input type="radio" id="aws" name="product" onClick= "disabledbtnproceed"/>
                aws @$300
            </label>
            
            <br/>
            <br/>
            
            <label for="Subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
                
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role= "button" href= "Ebus1.php"> Clear Choice</a>
            
            
            
            
            
            
        </body>
</html>