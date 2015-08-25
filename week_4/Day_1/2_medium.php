<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Create a class called "ShoppingCart" and another class called "Item".
     * Each item should have a name and price.
     *
     * Add these methods to your shopping cart:
     *  - "addItem" to add an item to the cart.
     *  - "getCostBeforeTax" to return the total cost of the items contained within it.
     *  - "getTaxAmount" to return the amount of tax a customer would need to pay (assuming an 10% tax rate).
     *  - "getCostAfterTax" to return the total cost of the items contained within it including tax.
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    class ShoppingCart {

    public $items = array();

    function addItem($item) {
        $this->items[] = $item;
    }
    
    function getCostBeforeTax() {

        // for($i=1;$i<=count($this->items);$i++) {
        //   $sum = 0 +  $this->items[$i - 1]->price . "\n";
            //}
         //return $sum;
         foreach($this->items as $this->item[$key]){
            $sum += $this->item[$key]->price;
            var_dump($sum);
            
         }
          
    }

    function getTaxAmount() {
        return array_sum($this->prices) * .1;
    }

    function getCostAfterTax() {
        return $this->getCostBeforeTax() + $this->getTaxAmount();
    }
    }

class Item{
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

}
    $cart = new ShoppingCart();
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));

    echo "<p>Total cost before tax: \${$cart->getCostBeforeTax()}</p>";
    echo "<p>Tax amount: \${$cart->getTaxAmount()}</p>";
    echo "<p>Total cost after tax: \${$cart->getCostAfterTax()}</p>";

    ?>

</p>

</body>
</html>