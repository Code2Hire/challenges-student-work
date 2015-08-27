<!-- 

    Using everything you have learned and some googling

    Sum the numbers between 1 and 20 and display the result

 -->
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>

        <?php

            // code goes here...
            for ($number=2;$number < 20; $number++)         //$number starts at 2 instead of 1 since you want the sum of numbers between 1 and 20.
            {
                $total =  $number+ $total;
            }
            echo "The total sum of the numbers in between 1 and 20 is: $total";
        ?>
    </p>
  </body>
</html>