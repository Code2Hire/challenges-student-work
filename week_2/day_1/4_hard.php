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


            $number = range(1, 100);
            $array3 = array();
            $array6 = array();
            
            foreach($number as $key => $value) {
            	if(($value % 3) === 0) {
            		array_push($array3, $value);
            		echo "$value, ";
            	}
            }
            
            echo "<br/>";
            echo 'Divisible by 3 = ' . count($array3);
            echo "<br/>";
            
            foreach($number as $key => $value) {
            	if(($value % 6) === 0) {
            		array_push($array6, $value);
            		echo "$value, "; 
            	}
            }
           echo "<br/>";
           echo 'Divisible by 6 = ' . count($array6);
          
            ?>
        </p>
	</body>
</html>