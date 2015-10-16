<?php
    /**
     * Write a function called "add" that adds all the numbers in an array and
     * returns the result.
     */
    
?>
<!DOCTYPE html>
<html>
  <head>
    <?php function add($array) {
      for($i = 0; $i < count($array); $i++) {
        $answer += $array[$i];
      }
      echo $answer;
    }
      ?>
  </head>
  <body>
    <p>
        <?php
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