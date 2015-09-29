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
        
        // takes array to add function
        
         function add($array){
            // counter counts the size of the array to give for loop a driver 
             $counter = count($array);
             
             for($I = 0; $I < $counter; $I++){
                 // adds each element to the previous
                    $num = $array[$I] + $num;         
                }
             
             return $num; // returns the added number
        }
        
        
        
        
        
            // take the array of numbers and passes to the add function
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            // take the array of numbers and passes to the add function
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>.