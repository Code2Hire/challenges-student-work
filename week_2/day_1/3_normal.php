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

		
		$months = range(1, 12); //establishes months as a range from 1-12
		foreach ($months as $month) { //individualizes each month
			$name = date('F', strtotime("$month/01/2015")); // utilizes built in date function to genreate a date
			if(strpos($name, 'J') === 0) { //utilizes strpos to specify only months that start with j
			echo "$month - $name - " . strlen($name) . "<br />";
		}
		}
	?>
</p>
</body>
</html>