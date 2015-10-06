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
          	
          	$monthArray = [
          	 'April',
          	 'September',
          	 'December'
          	    ];
                        foreach($monthArray as $month){
                            if(in_array($month,$monthExcludeArray)){
                                unset($monthExcludeArray);
                            }
                            
                            print_r($month);
                        }
          	    
          	
          ?>
        </p>
	</body>
</html>