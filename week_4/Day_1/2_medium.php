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
       
    
    class ShoppingCart { //sets class shopping cart
        public $items = array(); //establishes $items array
        var $beforeTax; //sets variable names
        var $tax;
        var $afterTax;
        
        public function addItem(Item $item) { //method that adds items to item array
            $this->items[] = $item;
        }
        
        public function getCostBeforeTax() { //method 'gets' price before tax
            foreach ($this->items as $item) {
                $beforeTax = $item->price + $beforeTax;
                
            }
            return $beforeTax;
        }
        public function getTaxAmount() { //method 'gets' how much tax is for each item added together
            foreach ($this->items as $item) {
                $tax = ($item->price * .1) + $tax;
            }
            return $tax;
        }
        public function getCostAfterTax() { //method 'gets' how much total of all items with tax
            $afterTax = ($this->getTaxAmount() + $this->getCostBeforeTax());
            return $afterTax;
        }
    }
    
    class Item { // creates item class
        public $name;
        public $price;
        
        public function __construct($name, $price) { // construct allows to set name and price for each item
            $this->name = $name;
            $this->price = $price;
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