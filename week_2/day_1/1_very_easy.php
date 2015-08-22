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
         //function my_range($start, $end, $step = 1) {
         //    $numbers = array();
         //    for($i = $start; $i <= $end; $i += $step) {
         //        array_push($num, $i);
         //    }
         //    return $num;
         //}
            
            
            //or
            
            
            //$t = 0
            //for($i = 1; $i <= 20; $i++) {
            //    $t+=$i;
            //    }
            //echo $t;
            
            //or
            
            echo array_sum(range(1, 20)); //array_sum is a built in function that adds up all numbers in array
        ?>
    </p>
  </body>
</html>