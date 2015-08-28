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
                
            // set integer as the variable that gets added    
            
            $integer = 0;
            
            for($i = 0; $i < 20 ;$i++){
                
                //iteration 1:   n = n + 1 / 0 = 0 + 1
                
                $integer = $integer + $i;
                
            }
            // output the total outside the loop
            echo $integer;

        ?>
    </p>
  </body>
</html>