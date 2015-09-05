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
        
        interface Describable {
          public function ProvideDescription();
        }
        
        class ShoppingCart {
            public $items = array();
            
            
            public function addItem($item){
                $this->items[] = $item;
            }
            
            function countItems(){
              return count($this->items);
            }
            
            function getTotalPrice(){
              foreach($this->items as $item){
                $total = $total + $item->price;
              }
              return $total;
            }
          
            function removeItem($item){
                unset($this->items[$item]);
            }
            
            function removeAll(){
             $this->items = array();
            }
            
            function findProductByName($name){
              return array_search($this->items, $name);
            }
            
            
            
            public function Description(){
              echo "Shopping Cart Contains {$this->countItems()} items, which include: </br>";
              foreach($this->items as $it){
                echo "{$it->provideDescription()}"; 
              }
             echo "The total is {$this->getTotalPrice()}";
            }
            
        }
        
        class Product implements Describable {
          protected $name;
          protected $brand;
          public $price;
          
          public function __construct($name, $brand, $price){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
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
          
          public function provideDescription(){
            return $this->provideDescriptionForProduct();
          }
          
          
        
          
        }
        
        class Clothing extends Product{
          protected $size, $color;
          
          public function __construct($name, $price, $brand, $size, $color){
            parent::__construct($name, $brand, $price);
            $this->size = $size;
            $this->color = $color;
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
            return "Clothing: {$this->getName()}, size {$this->getSize()}, {$this->getColor()}. </br>";
          }
          
        }
        
        class Television extends Product {
          protected $size, $type;
          
          public function __construct($brand, $price, $size, $type){
            parent::__construct($name, $brand, $price);
            $this->size = $size;
            $this->type = $type;
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
            return "Television: {$this->getBrand()}, a {$this->getSize()} {$this->getType()}. </br>";
          }
        }
        
        $ShoppingCart = new ShoppingCart();
        
        $BEYONDCREATION = new Clothing("SUPER HEAVY METAL EXTREME", '99.99', "CATTLE DECAPITATION", "X-TREME", "BLOOD RED");
        $princessTV = new Television("Barbie", '250.00', "42 inch", "LCD");
        
        $ShoppingCart->addItem($BEYONDCREATION);
        $ShoppingCart->addItem($princessTV);
        
        
        try{
          echo $ShoppingCart->Description();
        }
        catch(Exception $e){
          echo $e->getMessage();
        }
        //var_dump($ShoppingCart->items);
        ?>
    </p>
  </body>
</html>