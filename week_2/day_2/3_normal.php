<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
     
     //function that takes the owners name and returns a string with the name, and ride
    function ride($owner){
        $rides = array('car', 'boat', 'bike');
    
            array_unshift($rides, $owner . "s ");
        
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
        //printing the function with jason as the name
            print_r(ride('Jason'));
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
        //printing function as before with a new name 
            print_r(ride('Eric'));
        ?>
        </pre>
    </p>
  </body>
</html>