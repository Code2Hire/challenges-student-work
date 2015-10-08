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
            function my_function($name, $number){
             return str_repeat($name, $number);
            }
            
            echo my_function("Seth", 20);

        ?>
    </p>
  </body>
</html>