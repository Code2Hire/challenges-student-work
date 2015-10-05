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
            //arrays for wether they are divisble by a number
            $threeArray = array();
            $sixArray = array();

            //finding numbers divisible by 3 and 6 and putting them in the array accordingly
			for($i = 1; $i <= 100; $i++){
				if($i % 3 == 0){
					array_push($threeArray, $i);
				} 
				if($i % 6 == 0){
					array_push($sixArray, $i);
				}			
			}
			
			//making the different lists pretty with commas
			$comma3 = implode(", ", $threeArray);
			$comma6 = implode(", ", $sixArray);
			
            $amount3 = count($threeArray);
            $amount6 = count($sixArray);
			//printing the numbers
			echo "<pre>";
                echo $comma3;
            echo "</pre>";
            echo "<pre>";
                echo $comma6;
            echo "</pre>";
            echo "<pre>";
                echo "Amount divisible by 3: " . $amount3;
            echo "</pre>";
            echo "<pre>";
                echo "Amount divisible by 6: " . $amount6;
            echo "</pre>";

            ?>
        </p>
	</body>
</html>