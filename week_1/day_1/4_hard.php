<!-- 
	Using everything you have learned and some googling 

	render the months that I ask for below but make sure they are not in my $monthsExcludeArray

	Months you should try to render:
		- April
		- September
		- December
		
		**Make two arrays.
 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>
          <?php
          
          	// months I dont want to render
          	$monthExcludeArray = [
          	 'January', 
          	 'February',
          	 'March',
          	 'May',
          	 'June',
          	 'July',
          	 'August',
          	 'September',
          	 'November'
          	];
          	
            $myMonthArray = [ 
                "April", 
                "September", 
                "December"
            ];
            
            foreach($myMonthArray as $myMonth) { 

            	// if the month is inside both arrays, it's to be excluded. At least, that's how I understood
            	// the directions.
            	// looks to see if any of the months overlap and then echos that statement.
            	if (in_array($myMonth, $monthExcludeArray)) { 
            	    echo "I don't want that month. <br/>";
            	}
            	
            	// the average else statement :D
            	else { 
            	    echo $myMonth . "<br/>"; 
            	} 
            }
          	
          ?>
        </p>
	</body>
</html>