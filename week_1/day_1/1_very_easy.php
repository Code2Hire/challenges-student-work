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

          // code goes here...
          sort($unOrderedArray); 
          print_r($unOrderedArray);
          
          
          rsort($unOrderedArray);
          print_r($unOrderedArray);
          ?>
        </p>
  </body>
</html>