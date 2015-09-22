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
          
            // All months
            $monthsArray = [
          	 'January', 
          	 'February',
          	 'March',
          	 'April',
          	 'May',
          	 'June',
          	 'July',
          	 'August',
          	 'September',
          	 'October',
          	 'November',
          	 'December'
          	];
          	
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

            $resultArray = [];
            
          	// code goes here ...
          	/*
          	foreach($monthsArray as $month){
                //if month is NOT in the $monthescludearray, then echo it
                $inarray = in_array($month,$monthExcludeArray);
                if(!$inarray){
                    array_push($resultArray, $month);
                }
          	}
          	*/
          	
          	
          	$resultArray = array_diff($monthsArray,$monthExcludeArray);
          	print_r($resultArray);
          	
          ?>
        </p>
	</body>
</html>