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
            sort($unOrderedArray);//order the array
            foreach ($unOrderedArray as $names)
            {
              echo $names;//loop to display the ordered array
              echo "<br/>";
            }

            echo "<br/>";//Give some space in beween each list
            echo "<br/>";
            
            rsort($unOrderedArray);//order the array in reverse
            foreach ($unOrderedArray as $namesReverse)
            {
              echo $namesReverse;//loop to display ordered array in reverse order
              echo "<br/>";
            }
          ?>
        </p>
  </body>
</html>