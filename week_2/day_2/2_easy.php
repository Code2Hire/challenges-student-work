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
        //function that takes an array and adds them
            function add($num){
                return array_sum($num);
            }
            
            //adding the array of numbers
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            //adding another array of numbers
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>