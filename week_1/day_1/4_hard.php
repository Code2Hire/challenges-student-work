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
          	$monthIncludeArray = [
          	    'April',
          	    'September',
          	    'December'
          	    ];
            //loops through bad months, finds if one of them is 
            foreach($monthIncludeArray as $bad){
              if(in_array($bad, $monthExcludeArray)){
              echo "Your array does include $bad </br>";
              }
            }
          	
          ?>
        </p>
	</body>
</html>