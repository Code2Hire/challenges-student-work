<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
        <?php
        /**
         * OVERVIEW:
         * We've decided we want to add "wishlist" functionality to our site.  If you think about it,
         * a Wishlist is just a container that holds items just like a ShoppingCart. One major difference,
         * however, is that you can only add a product to a wishlist once.  Make sure that you account for this
         * functionality in your wishlist by using exceptions.  Remember that you can override behavior in inheritance and
         * how abstract classes work.  We are going to change the structure of your ShoppingCart Class from
         * the first Challenge so that we can re-use the code in a Wishlist.
         *
         * INSTRUCTIONS:
         * 1. Create an abstract class called ProductContainer.  This class should contain all of the behavior that
         * was included in your shopping cart from Challenge 1 that will be shared between your WishList and ShoppingCart.
         * Any behavior that should be different between the WishList and ShoppingCart should be written as an abstract
         * method.
         * 2. Create a ShoppingCart class that extends the Product Container class.  Implement the abstract methods that you
         * specified in step1 in your ShoppingCart method.
         * 3. Create a WishList class that extends the Product Container class.  Implement the abstract methods that you
         * specified in step1 in your WishList method.
         * 4. Override the provideDescription method in each child class to add "Container Type: " and whether it is a
         * ShoppingCart or WishList.  Remember how to reference the parent class to utilize its behavior.
         * 5. Create a static method on the ProductContainer class called createCartFromContainer($productContainer).  This
         * Method should take in any ProductContainer as a parameter.  It should then copy the contents of the container
         * that is passed in to a new instance of a ShoppingCart and return the ShoppingCart.  If the parameter $productContainer
         * that is passed into the static method is not a ProductContainer, throw an exception.
         * 6. Create at least one Clothing object and one Television Object from Exercise 2.
         * 7. Create a Wishlist Object
         * 8. Add each of the Products to your Wishlist.
         * 9. Now create a ShoppingCart that Mirrors your wishlist by calling the createCartFromContainer method.
         * 10. Print out the description (provideDescription) of both your wishlist and your shopping cart to make sure that
         * they have the same products in them.
         */

        ///////////////////////////
        // Put your code here!
        ///////////////////////////
        interface Describable {
          public function ProvideDescription();
        }
        
        abstract class ProductContainer implements Describable {
          abstract function provideDescription();
          abstract function addItem($item);
          abstract function countItems();
          abstract function getTotalPrice();
          abstract function removeItem($item);
          abstract function removeAll();
          abstract function getAllProducts();
          abstract function findProductByName($name);
        }
        
        class ShoppingCart extends ProductContainer{
            public $items = array();
            
            public function provideDescription() {
              echo "The Shopping Cart Contains {$this->countItems()} items, which include: </br>";
              foreach($this->items as $it){
                echo "{$it->provideDescription()}"; 
              }
             echo "The total is {$this->getTotalPrice()}";
            }
            
            public function addItem($item) { 
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
            
            function getAllProducts(){
              for($i = 0; $i < $this->countItems(); $i++){
                return $this->items[$i];
              }
            }
            
            function findProductByName($name){
              return array_search($this->items, $name);
            }
            
        }
        
        class WishList extends ProductContainer{
            public $items = array();
            
            public function provideDescription() {
              echo "The Wishlist Contains {$this->countItems()} items, which include: </br>";
              foreach($this->items as $it){
                echo "{$it->provideDescription()}"; 
              }
             echo "The total is {$this->getTotalPrice()}";
            }
            
            public function addItem($item) {
                if(array_search($item, $this->items) == true ){
                  throw new Exception('Sorry the item is already in your wishlist');
                }
                else {
                $this->items[] = $item;
                }
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
            
            function getAllProducts(){
              for($i = 0; $i < $this->countItems(); $i++){
                return $this->items[$i];
              }
            }
            
            function findProductByName($name){
              return array_search($this->items, $name);
            }
            
        }
        
        abstract class Product implements Describable {
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
          
          abstract public function provideDescriptionForProduct(); 
          
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
        
        class ItemDescriber {
          public function outputDescription ($item) {
              if ($item instanceof Describable) {
                  return $item->provideDescription();
              } else {
                throw new Exception ("There isn't a description");
              }
            }
        }
        
        $BEYONDCREATION = new Clothing("SUPER HEAVY METAL EXTREME", '99.99', "CATTLE DECAPITATION", "X-TREME", "BLOOD RED");
        $princessTV = new Television("Barbie", '250.00', "42 inch", "LCD");
        
        $shoppingCart = new ShoppingCart();
        $wishList = new WishList();
        
        try{
        $wishList->addItem($princessTV);
        }
        catch(Exception $e){
          echo $e->getMessage() . "</br>";
        }
        try{
        $wishList->addItem($BEYONDCREATION);
        }
        catch(Exception $e){
          echo $e->getMessage() . "</br>";
        }

        try{
          echo $wishList->provideDescription();
        }
        catch(Exception $e){
          echo $e->getMessage();
        }
        //var_dump($wishList->items);
        ?>
    </p>
  </body>
</html>