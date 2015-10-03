<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
     
    // function accepts the variable owner
    function ride($owner) {
        $rides = array('car', 'boat', 'bike');
        // loops through the count (3) of the array 
        for($i = 0; $i < count($rides); $i++) { 
            // sets up the display we want to view 
            $rides[$i] = $owner . "'s " . $rides[$i];
        }
        return $rides;
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <pre>
        <?php
            // uses the function with a name for the possession of the rides
            print_r(ride('Jason'));
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
            // same thing, different name
            print_r(ride('Eric'));
        ?>
        </pre>
    </p>
  </body>
</html>