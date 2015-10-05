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
            $number = 5; // this came from the previous page as a post variable
           
          
          
          function convert_number_to_word($number){    
           $number_list = array(
              0   => 'zero',
              1   => 'one',
              2   => 'two',
              3   => 'three',
              4   => 'four',
              5   => 'five',
              6   => 'six',
              7   => 'seven',
              8   => 'eight',
              9   => 'nine',
              10  => 'ten');
              
              $string = $number_list[$number];
              
            if($number > 10){
          	  echo "Nothing is greater than 10";
          	}
          	
          	return $string . "\n";
          }
          	
          	echo convert_number_to_word($number);
          	
          	
          	
          	
          ?>
        </p>
	</body>
</html>