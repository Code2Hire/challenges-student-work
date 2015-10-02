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
          public function provideDescription();
      }
      class ShoppingCart implements Describable{
        public provideDescription()
      }
       class CloudMovieFile implements Describable{
            public function provideDescription(){
              return "Awesome movie";
          }
        }
      
      abstract class Product implements Describable{
          protected $Name;
          protected $Brand; 
          protected $Price;
          
           abstract public function provideDescriptionForProductType();
          
          
          public function __construct($Name, $Brand, $Price){
            
              $this->Name = $Name;
              $this->Brand = $Brand;
              $this->Price = $Price;
              
          }
          
          public function provideDescription(){
            
            return $this->provideDescriptionForProductType(); 
            
          }
        
          public function getPrice(){
            
              if(is_numeric($this->Price)){
                return $this->Price;
              }
          }
          public function getBrand(){
          
            if(!empty($this->Brand)){
              return $this->Brand;
            }
          }
          public function getName(){
            if ($this->name){
              return $this->name;
            }
          }
      }

        class Clothing extends Product{
          protected $Size;
          protected $color;
          protected $Gender;
          protected $type;
          
          public function __construct($Name, $Brand, $Price, $Size, $Color, $Gender, $type){
            parent::__construct($Name, $Brand, $Price);
            $this->Size = $Size;
            $this->color = $Color;
            $this->Gender = $Gender;
            $this->type = $type;
          }
          public function getSize(){
            if ($this->Size){
              return $this->Size;
            }
          } 
          public function getColor(){
              
              $correctColors = array('red', 'blue', 'green', 'black', 'white', 'yellow');
              if ($this->color){
                if(in_array($this->color, $correctColors)) {
                  return $this->color;
                }
              }
          }    
          public function getGender(){
            if(($this->gender == "M") or ($this->gender == "F") or ($this->gender == "N")){
              return $this->Gender;
            } 
          }
        
          
          public function getType(){
            if ($this->type){
              return $this->type;
            } 
          }
          public function provideDescriptionForProductType(){
            return "This is an article of clothing. It is a". $this->getBrand()." " . $this->getColor()." " . $this->getGender()." " . $this->getType() . " " . "of size" ." ".  $this->getSize() ." ". "It costs". " " .$this->getPrice();
          }
        }
        
        class television extends Product{
          protected $Displaytype;
          protected $Size; 
          
          public function __construct($Name, $Brand, $Price, $Displaytype, $Size){
          parent::__construct($Name, $Brand, $Price);
          $this->Displaytype = $Displaytype;
          $this->Size = $Size;
        }
          public function getDisplaytype(){
                if($this->Displaytype){
                  return $this->Displaytype;
                }
          }
          public function getSize(){
            if ($this->Size){
              return $this->Size;
            }
          }
        public function provideDescriptionForProductType(){
          return "This is a" ." ". $this->getSize() . " " . $this->getBrand(). " " . $this->getDisplaytype(). " " . $this->getPrice();
        } 
      }
        
        
      $shirt = new Clothing ("V neck", "hollister", 9.99, "Medium", "Red", "Male", "cotton shirt");
      $tv = new Television ("Big tv", "Toshiba", 4.550, "plasma", "46 inch");
      $movie = new CloudMovieFile ("kids", "The lion king", "Early 2001");
      
        
        $customerItems = array($shirt, $tv, $movie);
        
        class ItemDescriber{
          public function outputDescription($product){
            if($product instanceof Describable){
              return $product->provideDescription();
            }
            else {
              throw new Exception ("Item is not here try another store");
            }
          }
        }
        
        $describer = new ItemDescriber ();
         try {
         foreach($customerItems as $customerItem){
           echo $describer->outputDescription($customerItem);
           echo "</br>";
         }
        }
          catch (Exception $e){
            echo $e->getMessage();
          }
        
        
        
        
        
        ?>
    </p>
  </body>
</html>