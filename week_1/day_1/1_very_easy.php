<!-- 
  Using everything you have learned and some googling

  I have an array of names below but they are all out of order 
  figure out the code needed to put them in order

  Bonus: render all of the names in reverse order
 -->
<!DOCTYPE html>
<html>
  <head>
      <title>Week 1 Day 1</title>
     
            
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      <style type="text/css">
       
        body {
            
            font-family: sans-serif,Arial,Helvetica;
        
              }
        
        table {
            width:100%;
            }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        th, td {
            padding: 5px;
            text-align: left;
            }
        table #t01 tr:nth-child(even) {
            background-color: #eee;
            }
        table #t01 tr:nth-child(odd) {
           background-color:#fff;
            }
        table #t01 th	{
            background-color: black;
            color: white;
            }
                  
      </style>
  </head>
    <body>
      <?php
      
      // creates a unordered list of names call $unorderedArray.
      
      $unOrderedArray = array('Joseph','Lauren','Eric','James','Derek','Mark','Alex','Tru','Michael');
      
      // sort is taking in the unorderedArray and sorting
      // $num is being set to the amount of elements in the Array;
      
       sort($unOrderedArray);
       $num = count($unOrderedArray);
      
      // echos are set up to output a Html Table and populate data using for loop.
      
       echo "<center>";
       echo "<table class='table table-striped' id='t01'>";
       echo "<tr>";
       echo "<th>Names In Order</th>";
       echo "<th>Names In Reverse Order</th>";
       echo  "</tr>";
      
      // populates table according to the lenth of the arrary 
       for($i=0;$i<$num;$i++){
         
         $holder = (($num-1) - $i);
         
         echo "<tr>";
         echo  "<td>";
         echo $unOrderedArray[$i]; // list the sorted array in the table
         echo  "</td>";
         echo  "<td>";
         echo $unOrderedArray[$holder]; //holder is going in the opposite direction as $i.
         echo  "</td>";
         echo "</tr>";
         
       };

      echo "</table>";
      echo "</center>"
      
      ?>
      
    </body>
 </html>