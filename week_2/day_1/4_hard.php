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
		$numarray = range(1,100);
		$threearray = array();
		$sixarray = array();
		
		foreach($numarray as $number){
			
			if($number%3 == 0){
				array_push($threearray,$number);
			}
				
			if($number%6 == 0){
				array_push($sixarray,$number);
			}
		}
		
		echo implode(", ", $sixarray);
		echo "<br/>";
		echo implode(", " ,$threearray);
		echo "<br/>";
		echo "Divisible by 6 = ", count($sixarray);
		echo "<br/>";
		echo "Divisible by 3 = ", count($threearray);
            ?>
        </p>
	</body>
</html>