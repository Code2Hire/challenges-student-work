<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

	Expected Results

	 3, 6, 9, 12, 15, 18, etc
	 6, 12, 18, 24, 30, etc

	 Divisible by 3 = ###
	 Divisible by 6 = ###


 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php


                
                // code goes here ...
             // created 2 arrays to store divisible numbers and count them
              $divby3 = array();
              $divby6 = array();
             
             
              // loop through 1 to 100, check for divisibility and store it to the according array
              for($i = 1; $i <= 100; $i++){
                 if($i % 3 == 0) {
                     echo "\n" .  $i;
                     echo ", ";
                     array_push($divby3,$i);
                 }
                 // for multiples of 6, display them with a factorial(!)
                 if($i % 6 == 0){
                     echo "\n" . $i;
                     echo "!";
                     array_push($divby6,$i);
                 }
                 
              }
              
              echo "<br />";
              echo "Divisible by 3:" . count($divby3);
              echo "<br />";
              echo "Divisible by 6:" . count($divby6);
            ?>
        </p>
	</body>
</html>