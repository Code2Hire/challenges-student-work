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
            function add($numbers){             //takes $numbers array as parameter to go into the function
                $total = array_sum($numbers);   //function to add all the values inside an array
                return $total;                  //returns total
            }
            echo "Sum of first array:";
            echo "<br/>";
            echo add(array(1,2,3,4,5));         //calls function with the given array as parameters
            
        ?>
    </p>
    <p>
        <?php
            echo "Sum of second array:";
            echo "<br/>";
            echo add([6,7,8,9,10]);             //same function  being called for the same purpose but with different notation
        ?>
    </p>
  </body>
</html>