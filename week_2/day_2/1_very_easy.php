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
          function NameandNumber($name, $number) { //create function that will echo name however many times we set $number as
            for ($i = 1; $i <= $number; $i++) {
              echo "$name <br />";
              
            }
          }
        NameandNumber("Chuck", 9); //implements custom function
        echo "<br />";
        //or
        
        function NameforNumber($name, $number) {
          echo str_repeat($name, $number); //str_repeat built in function that repeats a string specified number of times
        }
        NameforNumber("Chuck", 3);
        echo "<br />";
        ?>
    </p>
  </body>
</html>