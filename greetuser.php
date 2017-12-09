<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Greet User</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="Africa, Nigeria, greetings">
        <meta name="description" content="This program greets a user appropriately.">
        <meta name="author" content="Moses Ajireloja">
    </head>
     <body>
               <p>Date: <?php
               date_default_timezone_set("Africa/Lagos");
               echo date("d/m/Y."); ?>
               <?php $time = date("H");
                        if ($time < 12) {
                        echo "Good Morning!";
                        }
                        elseif ($time <= 17) {
                        echo "Good Afternoon!";
                        }
                        elseif ($time <=24) {
                        echo "Good Evening!";
                        }
               ?>
               </p>
    </body>
</html>
