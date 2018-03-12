<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="eBus2_validator.js"></script>
        
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
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "eBus3.php">
                
                <label for="Name">
                     Name:&nbsp;&nbsp;&nbsp;&nbsp;  
                </label>
                
                <input type="Name" id="Name" placeholder="Full Name" maxlength="50"><br>
                <br>
                
                <label for="email">
                     Email Address:&nbsp;&nbsp;&nbsp;&nbsp; 
                </label>
                
                <input type="email" id="email" maxlength="50"><br>
                <br>
                
                <label for="user_pin">
                     PIN:&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
                
                <input type="pin" id="user_pin" placeholder="4 digit pin" maxlength="4"><br>
                <br>
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
        <?php
            $_SESSION["total"] = $_POST["total"];
            
        ?>
        
        
        
    </body>
    

    
</html>