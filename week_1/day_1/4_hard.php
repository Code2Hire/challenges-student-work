<!-- 
	Using everything you have learned and some googling 

	render the months that I ask for below but make sure they are not in my $monthsExcludeArray

	Months you should try to render:
		- April
		- September
		- December
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
            //removes september from the $monthsexcludeArray, as per the instructions
          	unset ($monthExcludeArray[7]);
          	
          	$newArray = [
          	    'April',
          	    'September',
          	    'December',
          	    ];
          	    echo var_dump($newArray);
          ?>
        </p>
	</body>
</html>