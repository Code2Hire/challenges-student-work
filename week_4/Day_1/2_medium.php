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
    //makes an Item 
    class Item {
        public$name;
        public $price;
        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
    } 
    //sets up a shopping cart
    class ShoppingCart {
        public $items = array();
        protected $getCostBeforeTax;
        protected $total_after_tax;
        protected $tax;
        //puts items into an array for the shopping cart
        public function addItem($item){
            $this->items[] = $item;
        }
        //just the cost for each item in the cart
        function getCostBeforeTax(){
            foreach($this->items as $item){
                $this->total_before_tax += $item->price;
            }
            return $this->total_before_tax;
        }
        //tax amount for each item individually
        function getTaxAmount(){
            $this->tax = ($this->total_before_tax)*(.10);
            return $this->tax;
        }
        //cost with tax
        function getCostAfterTax(){
            $this->total_after_tax = ($this->total_before_tax)+($this->tax);
            return $this->total_after_tax;
        }
    }
    
    //items in shopping cart
    $cart = new ShoppingCart();
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));

    //spits out data
    echo "<p>Total cost before tax: \${$cart->getCostBeforeTax()}</p>";
    echo "<p>Tax amount: \${$cart->getTaxAmount()}</p>";
    echo "<p>Total cost after tax: \${$cart->getCostAfterTax()}</p>";

    ?>

</p>

</body>
</html>