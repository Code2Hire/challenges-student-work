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
    //  Put your code here!  //
    ///////////////////////////
    
    class ShoppingCart { 
        // this adds items to an array
        public function addItem($item) {
            $this->cartItems[] = $item; 
        }
        
        // this function loops through each item that is in the cart and 
        // calculates the total price
        public function getCostBeforeTax() { 
            foreach($this->cartItems as $item) { 
                $price = $price + $item->price;
            }
            return $price;
        } 
        
        // loops through each item and calculates the sales tax for the items 
        // in the shopping cart
        public function getTaxAmount() { 
            foreach($this->cartItems as $item) { 
                $calculateTax = $calucateTax + ($item->price * .1);
            } 
            return $calculateTax;
        } 
        
        // adds the price of the items and the sales tax together for an overall cost
        public function getCostAfterTax() { 
            $price = $this->getCostBeforeTax(); 
            $taxAmount = $this->getTaxAmount();
            return $price + $taxAmount;
        } 
    } 
    
    // new class that sets up the items and the price of each item
    class Item { 
        public $name;
        public $price;
        
        // hooray constructor
        public function __construct($name, $price) { 
            $this->name = $name;
            $this->price = $price;
        } 
    }

    // new instance of the shopping cart class
    $cart = new ShoppingCart();
    // the next four lines just add items using the item class
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));

    // the output for all the information
    echo "<p>Total cost before tax: \${$cart->getCostBeforeTax()}</p>";
    echo "<p>Tax amount: \${$cart->getTaxAmount()}</p>";
    echo "<p>Total cost after tax: \${$cart->getCostAfterTax()}</p>";

    ?>