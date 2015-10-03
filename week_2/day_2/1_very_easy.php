<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php

            /**
             * Write a function that takes a "name" and "number" (n)
             * print the name (n) times
             */
            $name = 'Tabitha'; 
            $num = 8;
            
            // a function that takes in a name and number and repeats the submitted name 
            // the number of times that were also submitted.
            function theName($name, $num) { 
              echo str_repeat($name, $num);
            } 
            
            // calling the function I wrote
            theName($name, $num); 


        ?>
    </p>
  </body>
</html>