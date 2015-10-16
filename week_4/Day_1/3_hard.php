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
    class ShoppingCart{
        public $cartItems = array();
        public function addItem($item){
            $this->cartItems[] = $item;
        }
        //adds prices
        public function getCostBeforeTax(){
            $price = 0;
            foreach($this->cartItems as $item){
                $price += $item->price;
            }
            return $price;
        }
        //uses prices to find tax
        public function getTaxAmount() {
            $price = $this->getCostBeforeTax();
            return $price * .1;
        }
        //adds cost and tax
        public function getCostAfterTax(){
            $price = $this->getCostBeforeTax();
            $tax = $this->getTaxAmount();
            return $price + $tax;
        }
        //remove item
        public function removeItem($item){
            unset($this->items[item]);
        }
    }
    class Item{
        public $name;
        public $price;
        
        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
    }
    class VideoGame extends Item{
        public $tax = .05;
    }
    class DVD extends Item{
        public $tax = .10;
    }
    class Book extends Item{
        public $tax = 0;
    }
    ///////////////////////////


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