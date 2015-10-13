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
    
    class ShoppingCart { //sets class ahopping cart
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
                $tax = ($item->price * $item->tax) + $tax;
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
    
    class Book extends Item { //extends item class
        public $tax = 0;
    }
    
    class DVD extends Item {
        public $tax = .05;
    }
    
    class Videogame extends Item {
        public $tax = .1;
    }


    $cart = new ShoppingCart();
    $cart->addItem(new Book('Cheap Book', 2.99));
    $cart->addItem(new Book('Expensive Book', 24.99));
    $cart->addItem(new DVD('Movie', 12.99));
    $cart->addItem(new VideoGame('Video Game', 59.99));
    
    $beforeTax = number_format($cart->getCostBeforeTax(), 2);
    $taxAmount = number_format($cart->getTaxAmount(), 2);
    $afterTax = number_format($cart->getCostAfterTax(), 2);

    echo "<p>Total cost before tax: \$$beforeTax</p>";
    echo "<p>Tax amount: \$$taxAmount</p>";
    echo "<p>Total cost after tax: \$$afterTax</p>";

    ?>

</p>

</body>
</html>