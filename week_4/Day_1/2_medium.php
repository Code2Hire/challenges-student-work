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
    class ShoppingCart{
        public $items = array();
        var $beforeTax;
        var $tax;
        var $afterTax;
        
        public function addItem($item){
            $this -> items[] = $item;
        }
        public function getCostBeforeTax(){
            foreach($this->$items as $item){
                $beforeTax = $this -> price + $beforeTax;
            }
            return $beforeTax; 
        }
        public function getTaxAmount(){
            $tax = $beforeTax * (.10);
            return $tax;
        }
        public function getCostAfterTax(){
            foreach($items as $item){
                $afterTax = $tax + $beforeTax;
            }
        }
    }
    
    class Item{
        public $name;
        public $price;
        public function __construct($name,$price){
            $this -> name = $name;
            $this -> price = $price;
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