<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
    function ride($owner) {
        $rides = array('car', 'boat', 'bike');
        $rides2= array();                                   //new array to store owners name along with vehicles name
        for($i = 0; $i < (count($rides)); $i++) {
            array_push($rides2, "$owner's   $rides[$i]");   //pushes to new array the owners name along with the vehicle from the original array
        }
        return $rides2;                                     //returns new array
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <pre>
        <?php
            print_r(ride('Jason'));                         //prints jasons name and his vehicles
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