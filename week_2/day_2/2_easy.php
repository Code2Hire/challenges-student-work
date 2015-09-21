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
    $array = (array(1,2,3,4,5));
    
    function add($array){
        $added =  array_sum($array);
        return $added;
        }
    echo $added;
    
        ?>
    </p>
    <p>
        <?php
    //function add(){
            
      //  }
        //    echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>