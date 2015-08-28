<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
        
            /**
             * Write a function that takes a "name" and "number" (n)
             * print the name (n) times
             * 
             */
             
               // function that takes a string and a number
             function printtimes($string,$number){
               
               for($I = 0; $I < $number; $I++){
                 
                 
                 echo $string; // outputs received string X amount of times
                }
           }
           
           printtimes("Jamar",4); // calling function printtimes(); and sends string and integer.
             

        ?>
    </p>
  </body>
</html>