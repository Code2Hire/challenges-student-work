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

            function namenum($name,$number){        //takes $name and $number as parameters
              for ($number;$number > 0;$number--)   //$number starts at whatever the parameter value is whenever the function is called
              {
                echo $name;                         //fucntion will display the name found on the parameters when the function is called
                echo "<br/>";
              }
              
            }
            namenum("Nathan",3);                    //namenum fucntion is called given parameters of "Nathan" and 3 for $name and $number respectively
        ?>
    </p>
  </body>
</html>