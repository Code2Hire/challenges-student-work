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

          	$monthExcludeArray[0] = "April";
          	$monthExcludeArray[2] = "December";
          	foreach($monthExcludeArray as $key=>$val){
          	    $arr = [1,3,4,5,6,8];
          	    if(in_array($key,$arr)){
          	        unset($monthExcludeArray[$key]);
          	    }
          	}
          	
          	print_r($monthExcludeArray);
          ?>
        </p>
	</body>
</html>