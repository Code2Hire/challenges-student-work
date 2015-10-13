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
          	  
          	  
          	$myMonthArray = [ // creates an array of months we want
          	      'April', 'September', 'December'
          	  ];
          	   
          	   foreach($myMonthArray as $mymonth) { //specifies each individual month in array
          	   
          	      if (in_array($mymonth, $monthExcludeArray)) { //in_array makes sure months we want are not in $monthExcludeArray w/ ifelse statement
          	        echo "Wrong";
          	      } else {
                    echo $mymonth;
                  }
          	   }
          	
          ?>
        </p>
	</body>
</html>