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
              function name($name,$number){
                 for($i=1;$i<=$number;$i++){
                
                   echo $name . "<br />";
                   
                 }
              }
                $name = 'anthony';
                $number = '6';
                name($name,$number);

        ?>
    </p>
  </body>
</html>