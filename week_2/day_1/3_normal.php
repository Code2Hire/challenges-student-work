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

		// code goes here ...
		for ($m=1; $m<=12; $m++) {
     		$month = date('F', mktime(0,0,0,$m, 1,date('Y')));		// date function displays months January, February etc.
     		$firstcha=substr($month,0,1);							//substr returns first character of every month
     		$len=strlen($month);									//strlen determines the length of characters in each month name
     				
     			if ($firstcha == "J"){								//loop will find every month beginning with the letter J.

     				echo "$m - $month - $len";						//displays the number of each month that starts with 'J' along with number of characters and the actual name
     				echo "<br/>";	
     			}
     				
     			}

	?>
</p>
</body>
</html>

