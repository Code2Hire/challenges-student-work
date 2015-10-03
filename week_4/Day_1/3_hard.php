<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Copy your shopping cart code from the previous challenge.
     * This time we don't want to add "Item" objects to the shopping cart. Instead, create three new classes:
     * "Book", "DVD" and "VideoGame".
     *
     * Change your shopping cart's "addItem" method so it can accept a Book, DVD or VideoGame object.
     *
     * Now make it so that books are tax-free, DVDs have 5% tax and video games have 10% tax.
     * Make sure your shopping cart can still return the total cost of items and the correct tax amount
     * the customer would need to pay.
     *
     * Bonus points: Can you implement a "removeItem" method on your shopping cart class?
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////

    // lines 29 - 71 are all the same from the medium challenge
    class ShoppingCart { 
        public $cartItems = array(); 
    
    
        public function addItem($item) {
            $this->cartItems[] = $item;
        }
        
        public function getCostBeforeTax() { 
            $price = 0;
            foreach($this->cartItems as $item) { 
                $price = $price + $item->price;
            }
            return $price;
        } 
        
        public function getTaxAmount() { 
            $calucateTax = 0;
            foreach($this->cartItems as $item) { 
                // instead of using the overall 10% tax from the last challenge, 
                // this new taxAmount variable gets the indiviual tax amounts 
                // from the children classes.
                $calucateTax = $calucateTax + ($item->price * $item->taxAmount);
            } 
            
            return $calucateTax;
            
        } 
        
        public function getCostAfterTax() { 
            $price = $this->getCostBeforeTax(); 
            $taxAmount = $this->getTaxAmount();
            return $price + $taxAmount;
        } 
    }
    
    class Item { 
        public $name;
        public $price;
        
        public function __construct($name, $price) { 
            $this->name = $name;
            $this->price = $price;
        } 
    } 
    
    // the following classes are basically just different items that use the information
    // from the parent Item class 
    class Book extends Item { 
        // new tax amount
        public $taxAmount = 0;
    } 
    
    class DVD extends Item { 
        // new tax amount
        public $taxAmount = .05;
    } 
    
    class VideoGame extends Item { 
        // new tax amount
        public $taxAmount = .10;
    } 

    // same information from the last challenge
    $cart = new ShoppingCart();
    $cart->addItem(new Book('Cheap Book', 2.99));
    $cart->addItem(new Book('Expensive Book', 24.99));
    $cart->addItem(new DVD('Movie', 12.99));
    $cart->addItem(new VideoGame('Video Game', 59.99));

    // number_format sets up the numbers so it looks like an actual price 
    // ex. 32.45 with the two decimal places
    $beforeTax = number_format($cart->getCostBeforeTax(), 2);
    $taxAmount = number_format($cart->getTaxAmount(), 2);
    $afterTax = number_format($cart->getCostAfterTax(), 2);

    // output 
    echo "<p>Total cost before tax: $$beforeTax</p>";
    echo "<p>Tax amount: $$taxAmount</p>";
    echo "<p>Total cost after tax: $$afterTax</p>";

    ?>

    ?>

</p>

</body>
</html>