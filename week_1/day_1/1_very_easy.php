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

<<<<<<< HEAD
          // code goes here...
          sort($unOrderedArray);
          print_r ($unOrderedArray);
          echo "<br/>";
          print_r($unOrderedArray);
=======

$sortedArray = sort($unOrderedArray);
    foreach($unOrderedArray as $name){
      echo $name . " ";
    }
$sortedArray = array_reverse($unOrderedArray);
    foreach($sortedArray as $name){
      echo $name . " ";
    }
        
>>>>>>> master
          ?>
        </p>
  </body>
</html>