<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
     
     
    function ride($owner) {
        //adds the string owner to the array and out puts who owns what.
        
        $rides = array('car', 'boat', 'bike');
        $num = count($rides);
        for($i = 0; $i < $num ; $i++) {
        
            array_push($rides, $owner . "'s " . $rides[$i]);
        }
        return $rides;
    }
?>
<!DOCTYPE html>
<html>
  <head>
      
  </head>
  <body>
    <p>
        <pre>
        <?php
            print_r(ride('Jason')); // Makes Jason a owner of the rides
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
            print_r(ride('Eric')); // Makes eric the ower of rides
        
        ?>
        </pre>
    </p>
  </body>
</html>