<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
    function ride($owner) { //creates funtion that displays rides when a name string is input
        $rides = array('car', 'boat', 'bike');
        for($i = 0; $i < count($rides); $i++) { //runs through each key
            $rides[$i] = $owner . "'s " . $rides[$i]; //sets elements in rides array to this string w/ owners name included
        }
        return $rides; //saves data
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <pre>
        <?php
            print_r(ride('Jason')); // displays array data
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
            print_r(ride('Eric'));
        ?>
        </pre>
    </p>
  </body>
</html>