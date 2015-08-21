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
          function NameandNumber($name, $number) {
            for ($i = 1; $i <= $number; $i++) {
              echo "$name <br />";
              
            }
          }
        NameandNumber("Chuck", 9);
        echo "<br />";
        //or
        
        function NameforNumber($name, $number) {
          echo str_repeat($name, $number);
        }
        NameforNumber("Chuck", 3);
        echo "<br />";
        ?>
    </p>
  </body>
</html>