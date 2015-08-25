<!-- 

    Using everything you have learned and some googling

    Sum the numbers between 1 and 20 and display the result

 -->
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>

        <?php

            // code goes here...
            $t=0;
                for ($i=1;$i<=20;$i++){
                    $t+=$i;
                }
                echo $t . "<br />"; 
                
                //echo array_sum(range(1,20));

        ?>
    </p>
  </body>
</html>