<?php
 session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    
    <body>
        <h4>RECEIPT</h4>
        <?php
          echo "Total is " . $_SESSION["subtotal"] . ".";
        ?>
    </body>
</html>