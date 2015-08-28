<!-- 
	Using everything you have learned and some googling

	pretend this is a post page and someone is trying to figure out
	what someones favorite color is... I have provided you this associative
	array so come up with the best way of returning that persons color

 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>
     <?php
          	$name = 'Eric'; // this came from the previous page as a post variable

          	// this came from the DB.
			$nameToColorArray = array(
	          'Alex' => 'blue',
	          'Joseph' => 'green',
	          'James' => 'red',
	          'Eric' => 'black',
	          'Mark' => 'green',
	          'Lauren' => 'pink',
	          'Michael' => 'blue',
	          'Derek' => 'purple',
	          'Tru' => 'red',
	         );

            // takes name as a key and associcates that names variable with the right color.
			echo $nameToColorArray[$name];

	         
          ?>        
          </p>
	</body>
</html>