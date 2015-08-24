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
           //array of names
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
              
          //sorts and prints array in alphabetical order, maybe
          echo "<u>Alphabetical Order </u> <br/>";
          sort($unOrderedArray);
          for($i = 0; $i < count($unOrderedArray); $i++){
          echo $unOrderedArray[$i] . "<br/>";
          }
          echo "<br/>";
          echo "<u>Reverse Alphabetical Order </u><br/>";
          //sorts array in reverse and prints
          rsort($unOrderedArray);
          for($i = 0; $i < count($unOrderedArray); $i++){
          echo $unOrderedArray[$i] . "<br/>";
          }
          // code goes here...
          ?>
        </p>
  </body>
</html>