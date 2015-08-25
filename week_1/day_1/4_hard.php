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

          	// code goes here ...
            $myExcludeArrray =[
            "April",
            "September",
            "December"
            ];
            foreach($myExcludeArrray as $myMounth){
            if (!in_array("April", $monthExcludeArray)){
                echo $myMounth . "<br />";
            }else{
                echo "I dont";
            }
            }
          ?>
        </p>
	</body>
</html>