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
            
            function add($array) { 
                // start with the solution at 0 so you can add to it each time 
                // the loop goes through
                $solution = 0;
                foreach($array as $addition) { 
                    // takes the solution from the previous loop through and adds 
                    // those numbers together 
                    $solution = $addition + $solution; 
                } 
                // returns the total 
                return($solution);
            } 
            
            // calls the function on this array of numbers
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            // also calling the function, but with a shorthand array
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>