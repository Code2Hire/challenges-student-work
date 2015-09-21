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
        
    $numarray =  range (1,20);
        $total = array_sum($numarray);
        echo $total;
        ?>
    </p>
  </body>
</html>