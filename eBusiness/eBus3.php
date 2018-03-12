<?php
//Start the session
session_start();
?>

<?php
    $_SESSION["Name"] = $_POST["Name"];
    $_SESSION["email"] = $_POST["email"];
?>


<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
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
        <h4>RECEIPT</h4>
        
        <h2>Your order is complete!</h2>
        <p>Thank you for ordering from In the Clouds online store.<br>
        Please see below conformation of your order.</p>
        
        
        
        <?php
        echo "The total cost of this transaction is: " . $_SESSION["total"];
        ?>
        
    <a href="../homepage.html" class="btn btn-success">Home</a>  
    </body>
</html>