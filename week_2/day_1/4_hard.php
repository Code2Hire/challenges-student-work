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


                
                $div3 = array(); //names arrays numbers will be pushed into
                $div3and6 = array();
                for( $i = 1; $i <= 100; $i++) { //uses for loop to to loop through all numbers up to and including 100
					if ($i % 3 === 0) { //uses modulus to see if numbers are divisible by 3 and/or 6
						array_push($div3, $i);
						if ($i % 6 === 0) {
							array_push($div3and6, $i);
						}
					}
                }
                echo implode(', ', $div3); //implode turns array into string to display, ',' is what separates strings
                echo '<br />';
                echo implode(', ', $div3and6);
                echo '<br /><br />';
                echo 'Divisible by 3 = ' . count($div3); //count counts nunber of elements in array
                echo '<br />';
                echo 'Divisible by 3 and 6 = ' . count($div3and6);
            ?>
        </p>
	</body>
</html>