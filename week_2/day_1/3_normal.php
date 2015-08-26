<!-- 
	Using everything you have learned and some googling 

	without using an array with the month names, find all the months that begin with "J"

	- Display the Month Number, Month Name, and how many characters are in that Month Name

	Results should be:
		1 - January - 7
		6 - June - 4
		7 - July - 4



 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
	<?php

		$months = range(1, 12);
		
		$months[0] = "January";
		$months[1] = "February";
		$months[2] = "March";
		$months[3] = "April";
		$months[4] = "May";
		$months[5] = "June";
		$months[6] = "July";
		$months[7] = "August";
		$months[8] = "September";
		$months[9] = "October";
		$months[10] = "November";
		$months[11] = "December";
		
		foreach($months as $key => $value){
			if(strpos($value, 'J') === 0){
			echo $key + 1 . " - " . $value . " - " . strlen($value);
				echo "<br/>";
			}
			else{
			}
		}
		
	
		


	?>
</p>
</body>
</html>