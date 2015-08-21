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
        $array = array(1,2,3,4,5);
            function add($array) {
                $num = 0;
                foreach ($array as $integer) {
                    $num += $integer;
                }
                return $num;
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