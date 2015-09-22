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
          
          
          // All 12 months used to compare to non-render list
            $monthsOfTheYear = array(
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
                );
            
          	// months I dont want to render
          	$monthExcludeArray = array(
          	 'January', 
          	 'February',
          	 'March',
          	 'May',
          	 'June',
          	 'July',
          	 'August',
          	 'September',
          	 'November'
          	);
          	
            foreach($monthsOfTheYear as $month){
                // for each loop takes monthsofyear as $month to compare to $monthsExcluded
                
                // if $months is (!) not in the array echo that month
                
                 if (!in_array($month, $monthExcludeArray)) {
                     echo $month . '<br />';
                 }
                
            }     
                

            ?>          	
        </p>
	</body>
</html>