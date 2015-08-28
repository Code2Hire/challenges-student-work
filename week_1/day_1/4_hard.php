<!-- 
	Using everything you have learned and some googling 

	render the months that I ask for below but make sure they are not in my $monthsExcludeArray

	Months you should try to render:
		- April
		- September
		- December
 -->

<<!DOCTYPE html>
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
          	
          	unset($monthExcludeArray[7]);
          	
            $myMonthArray = [ 
                'April', 
                'September', 
                'December',
            ];
            
           
          var_dump($monthRenderArray);
          	
          ?>
        </p>
	</body>
</html>
