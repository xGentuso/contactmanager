<?php
    session_start();
?>
    <!DOCTYPE html>
<html>
   <head>
       <title>Contact Manager - Confirmation</title>
       <link rel="stylesheet" type="text/css" href="css/main.css" />       
   </head>
   <body>
       <?php include("header.php"); ?>
       <main>
        <h2>Contact Confirmation</h2>

        <p>
            Thank you, <?php echo $_SESSION["fullName"]; ?> for
            saving your contact information. 
            We look forward to working with you.
        </p>
        
        <p><a href="index.php">Back to Home</a></p>
       </main>
       <?php include("footer.php"); ?>
   </body>
</html>