<!-- 
  Using everything you have learned and some googling

  I have an array of names below but they are all out of order 
  figure out the code needed to put them in order

  Bonus: render all of the names in reverse order
 -->
<!DOCTYPE html>
<html>
  <head></head>
  <body>
        <p>
          <?php
            $unOrderedArray = [
              'Joseph',
              'Lauren',
              'Eric',
              'James',
              'Derek',
              'Mark',
              'Alex',
              'Tru',
              'Michael'
            ];
              sort($unOrderedArray); //sorts array in alphabetical order
              
              print_r($unOrderedArray); //displays array
              
              rsort($unOrderedArray); //sorts array in reverse alphabetical order
              
              print_r($unOrderedArray); // displays array
          
          ?>
        </p>
  </body>
</html>