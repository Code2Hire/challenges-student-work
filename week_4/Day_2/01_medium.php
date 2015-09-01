<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
        <?php
        /**
         * So we have our products, but what are we going to do with them.
         *
         * Let's create a cart that people can add products to. The cart should also be Describable.
         * Create a class called ShoppingCart that contains the following public methods.
         *
         * 1. provideDescription() - We are implmenting the Describably method after all.
         *     Come up with a good way to describe what is in your cart in this method.
         * 2. addProduct($product) - Add a product to the cart.
         *     Throw an exception if what we are adding to the cart is not of type Product
         * 3. removeOne($product) - Remove a single item that matches your product parameter.
         *     Throw an exception if your cart does not have any instances of that product in your cart
         * 4. removeAll($product) - Remove all instances of the product passed in.
         *     Throw an exception if your cart does not have any instances of that product in your cart.
         * 5. getTotalPrice() - Get the total price of all the contents in your cart.
         * 6. getAllProducts() - Get an array of all products that exist in your shopping cart.
         * 7. findProductByName($name) - Find the first instance of a product by the name passed in
         *     Throw an exception if a product is not found with that name.
         *
         * HINTS - You will be able to reuse some code in this challenge.  Think about it, removing all involves
         * removing one many times.  In your provideDescription method on your cart, you could (wink, wink) provide
         * each of your products to describe themselves.  It may also be useful to print how many items are in the cart or how much
         * the price of your total cart is.
         *
         * Perform the following tasks:
         *
         * 1. Create at least one Clothing Object and one Television Object.
         * 2. Create a shopping cart instance.
         * 3. Add the two products to the cart.
         * 4. Print out the description of the cart.
         * 5. Print out the total price of the cart.
         * 6. Remove the Clothing object from your cart.
         * 7. FInd the product in the cart with the name of your Television Object.
         * 8. Pass your ShoppingCart into the ItemDescriber outputDescription method from Exercise 4 and see
         * how it will also output the description of your cart, just like it did your individual products
         */

        ///////////////////////////
        // Put your code here!
        ///////////////////////////
        
        //////////
        //THIS DOES NOT WORK, IF YOU SEE THIS BEFORE TOMORROW, WILL HOPEFULLY FIX, SORRY
        //////////
        
        interface Describable {
          public function provideDescription();
        }
        
        abstract class ShoppingCart implements Describable{
            public $items = array();
            protected $name, $price, $brand;
            protected $total, $amount;
           
            public function __construct($name, $price, $brand){
              $this->name = $name;
              $this->price = $price;
              $this->brand = $brand;
            }
            
            public function getName(){
            if(empty($this->name)){
              throw new Exception('Value is empty');
            }
            return $this->name;
          }
          
            public function getBrand(){
              if(empty($this->brand)){
                throw new Exception('Value is empty');
              }
              return $this->brand;
            }
          
            public function getPrice(){
              if(is_numeric($this->price)){
                return $this->price;
              }
              else{
                throw new Exception('Not a valid price');
              }
            }
            
            public function addItem($item){
                $this->items[] = $item;
            }
            
            function countItems(){
              $amount = count($this->items);
            }
            
            function getTotalPrice(){
              foreach($this->items as $item){
                $this->total += $item->price;
            }
            return $this->total;
            }
          
            function removeItem($item){
                unset($this->items, $item);
            }
            
            function removeAll($item){
             foreach($items as $it){
               unset($this->items, $it);
             } 
            }
            
            function findProductByName($name){
              return array_search($this->items, $name);
            }
            
            abstract function provideDescriptionForProduct();
            
            public function provideDescription(){
              return "Shopping Cart Contains {$this->countItems()} items, which include: </br>";
              foreach($items as $it){
                return "{$it->provideDescriptionForProduct()}"; 
              }
              return "The total is {$this->getTotalPrice()}";
            }
            
        }
        
        class Clothing extends ShoppingCart{
          protected $size, $color;
          
          public function __construct($name, $price, $brand, $size, $color){
            parent::__construct($name, $price, $brand);
            $this->size = size;
            $this->color = color;
          }
          
          public function getSize(){
            if(empty($this->size)){
              throw new Exception('Value is empty');
            }
            else{
              return $this->size;
            }
          }
          
          public function getColor(){
            if(empty($this->color)){
              throw new Exception('Value is empty');
            }
            else{
              return $this->color;
            }
          }
          
          public function provideDescriptionForProduct(){
            return "ClOTHING {$this->getName()}, size {$this->getSize()}, {$this->getColor()} </br>";
          }
          
        }
        
        class Television extends ShoppingCart {
          protected $size, $type;
          
          public function __construct($brand, $price, $size, $type){
            parent::__construct($brand, $price, $name);
            $this->size = size;
            $this->type = type;
          }
          
          public function getSize(){
            if(empty($this->size)){
              throw new Exception('Value is empty');
            }
            else{
              return $this->size;
            }
          }
          
          public function getType(){
            if(empty($this->type)){
              throw new Exception('Value is empty');
            }
            else{
              return $this->type;
            }
          }
          
          public function provideDescriptionForProduct(){
            return "Television {$this->getBrand()}, a {$this->getSize()} {$this->getType()} </br>";
          }
        }
        
        $BEYONDCREATION = new Clothing("SUPER HEAVY METAL EXTREME", "99.99", "CATTLE DECAPITATION", "X-TREME", "BLOOD RED");
        $princessTV = new Television("Barbie", "250.00", "42 inch", "LCD");
        
        //$ShoppingCart->addItem("stuff");
        //$ShoppingCart->addItem($princessTV);
        
        
        
        echo $ShoppingCart->provideDescription();
        
        ?>
    </p>
  </body>
</html>