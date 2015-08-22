<?php
    /**
     * Write a function called "add" that adds all the numbers in an array and
     * returns the result.
     */
    
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
            $array = array(1,2,3,4,5);
            function add($array) {
                $num = 0; //sets number to be added to as 0
                foreach ($array as $integer) { //individualizes each number in array
                    $num += $integer; //adds each number to array
                }
                return $num; //saves result
            }
        ?>
    </p>
    <p>
        <?php
            echo add($array);  
        ?>
    </p>
  </body>
</html>