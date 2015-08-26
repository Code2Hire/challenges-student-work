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

            function namerep ($name, $n){
              
              for($i=1; $i<=$n; $i++){
                
                echo $name;
                echo '<br />';
              }
            }
          namerep("Conner",6);
        ?>
    </p>
  </body>
</html>