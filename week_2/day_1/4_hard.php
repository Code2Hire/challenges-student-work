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
                    
                    
                    $numbers = range(1, 100); // create an array of number bettween 1 and 100
                    $divThree = array(); // array to hold numbers divisable by 3
                    $divSix = array();    // array to hold numbers divisable by 6
                    
                    $divThreeSize = 0; // counter for the number of 3's
                    $divSixSize = 0; // counter for the number of 6's
                
                
                // for each number as $num we check to see if it is divisable by 3 and 6
                    
                    foreach($numbers as $num){
                        if($num%3 == 0){
                            $divThree[] = $num; // push number to the array
                        }
                        
                        if($num%6 == 0){
                            $divSix[] = $num;
                        }
                        
                    }
                    
                    // count both arrays.
                    
                    $divThreeSize = count($divThree);
                    $divSixSize = count($divSix);
                    
                    // tunr the strings into arrays
                    $divThreeString = implode ( ',',$divThree );
                    $divSixString = implode(',',$divSix);
                    
                    // output calculated info
                    
                    echo "Divisible by 3 = $divThreeSize";
                    echo "<pre>";
                    echo "Divisible by 6 = $divSixSize";
                    echo "<pre>";
                    echo $divThreeString;
                    echo "<pre>";
                    echo $divSixString;
                    
                    
                    ?>
                    
        </p>
	</body>
</html>