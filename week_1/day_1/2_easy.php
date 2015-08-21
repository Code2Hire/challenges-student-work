<!-- 
	Using everything you have learned and some googling

  Imagine this is a post page and they have sent you a number
  you want to return them the number it text format. For instance:
    
    - 1 -> one
    - 2 -> two

  but anything that is above 10 we want to return "Nothing is greater than 10"
 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
          <?php
            $number = range(1,10); // this came from the previous page as a post variable

          	strval($number);
          	echo $number;
          	
          	if($number > 10){
          	  echo "Nothing is greater than 10";
          	}
          	
          	
          ?>
        </p>
	</body>
</html>