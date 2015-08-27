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
          	
          	    if (!in_array('April', $monthExcludeArray)) //Displays the month after checking if the month specified is not included in the array
          	    {
                    echo 'April';
                    echo "<br/>";
                }
        
                
                if (!in_array('September', $monthExcludeArray)) 
          	    {
                    echo 'September';
                    echo "<br/>";
                }
                
                
                if (!in_array('December', $monthExcludeArray)) 
          	    {
                    echo 'December';
                    echo "<br/>";
                }
                
          	
          	// code goes here ...
          ?>
        </p>
	</body>
</html>