<!-- 
	Using everything you have learned and some googling

  The multi-demensional array below contains packages with prices but
  they are all out of order and I want to present them to my customer
  in the correct order with the lowest price first
 -->
  
<?php

// multidimensional array that holds package names and prices

  $packagesArray = array(
    array('name' => 'Package 1', 'price' => 5.99),
    array('name' => 'Package 2', 'price' => 3.01),
    array('name' => 'Package 3', 'price' => 100.01),
    array('name' => 'Package 4', 'price' => 11.00),
    array('name' => 'Package 5', 'price' => 25.95),
    array('name' => 'Package 6', 'price' => 10.99),
    array('name' => 'Package 7', 'price' => 11.00),
  );


// creating new array to hold prices 
$price = array();

// for each element of $packages array
// we transerfer over the key and the row

foreach ($packagesArray as $key => $row)
{
    $price[$key] = $row['price'];
}

//using price to help sort $packages array and out put the correct order.

array_multisort($price, SORT_DESC, $packagesArray);



  
?>




<!DOCTYPE html>
<html>
  <head></head>
	<body>
      <h1>Packages</h1>
      <p>Here are all the packages we offer and there price:</p>
      <table>
        <th><td>Name</td><td>Price</td></th>
        <!-- 
          this for each loop will iterate over each item above and
          set $package as the inner array so we can have access to it directly
          this is appose to accessing them like so $packagesArray[0]['name'];
         -->
        <?php foreach ($packagesArray as $packageArray): ?>
          <tr><td><?=$packageArray['name']?></td><td><?=$packageArray['price']?></td></tr>
        <?php endforeach ?>
      </ul>
	</body>
</html>