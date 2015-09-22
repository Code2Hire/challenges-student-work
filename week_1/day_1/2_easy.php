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

          // Gets what the user typed
          $num = $_GET['mynumber'];

          if($num > 10){
            echo "Nothing is bigger than ten";
          } else {
          
            // Define the lookup array
            $arr = [
              1=>"one",
              2=>"two",
              3=>"three",
              4=>"four",
              5=>"five",
              6=>"six",
              7=>"seven",
              8=>"eigth",
              9=>"nine",
              10=>"ten",
            ];
            
            // Get the "word" of the number
            $numberWord = $arr[$num];
            
            // Echo that thing we just got
            echo($numberWord);

            
          }
          ?>

        </p>
	</body>
</html>