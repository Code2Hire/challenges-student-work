<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it. Continue to generate random numbers until that number equals 7.

    i.e.
        1
        4
        3
        4
        6
        3
        4
        1
        5
        3
        5
        7

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

                // while random number is not equal to 7 
          	    while ($randnum != 7){
          	        
          	    // generat random number 
          	    $randnum = rand(1,7);
          	    
          	    // Output random number
          	    echo $randnum  . "  ";
            }

            ?>
        </p>
	</body>
</html>