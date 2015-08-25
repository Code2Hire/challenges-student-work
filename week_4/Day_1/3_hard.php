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
    class ShoppingCart {

    public $items = array();
    public $prices = array();

    function addItem($item) {
        $this->items[] = $item->name;
        $this->prices[] = $item->price;
    }

    function getCostBeforeTax() {
        return array_sum($this->prices);
    }

    function getTaxAmount() {
        return array_sum($this->prices) * .1;
    }

    function getCostAfterTax() {
        return $this->getCostBeforeTax() + $this->getTaxAmount();
    }
}

class Item extends ShoppingCart{
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

class Book extends Item {
    public $name;
    public $price;

    function getTax() {

        if($this->name == 'Book') {
            return 0;
        }
    }

}

class DVD extends Item {
    public $name;
    public $price;
}

class VideoGame extends Item {
    public $name;
    public $price;
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