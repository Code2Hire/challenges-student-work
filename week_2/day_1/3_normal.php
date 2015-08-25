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
		    $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
			if( $month[0]=="J"){
			 $length = strlen($month);
			 echo $m . "-" . $month . "-" . $length . "<br />";
			}
	    }
	?>
</p>
</body>
</html>