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
            function NameNum($name, $number){
             for($i = 1; $i <= $number; $i++){
                echo $name;
                echo "<br/>";
             }
            }
            NameNum(Will, 5)
        ?>
    </p>
  </body>
</html>