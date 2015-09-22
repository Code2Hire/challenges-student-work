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
    function nameandnumber($name,$number){
      $string = str_repeat($name,$number);
        echo $string;

    }
        echo nameandnumber('Cleon ',7);
        ?>
    </p>
  </body>
</html>