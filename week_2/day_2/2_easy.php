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
        $array = [1,2,3,4,5];
        $total = 0;
        
        function add($array){
          foreach($array as $val){
             $total += $val; // adds all elements in $array
          }
            return $total; // returns the array total outside of loop 
        }
        
       
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>