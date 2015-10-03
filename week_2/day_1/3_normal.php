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

		// there are 12 months in a year so range = 12
		$months = range(1,12); 
		
		// loops through each indiviual number (the months)
		foreach($months as $month) { 
			// Uses this fancy php date function to get a certain lay out 
			// of the date we want.
			$name = date('F', strtotime("$month/01/2015"));
				// Checks to see the month name begins with J
				if(strpos($name, 'J') === 0) { 
					// echos the information in the layout that was asked for
					echo "$month - $name - " . strlen($name) .  "<br />"; 
		} 
		} 

	?>
</p>
</body>
</html>