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
        
        
         /*
        
                      START OF SHOPPINGCART CLASS
        */
        
        class ShoppingCart implements Describable{
          
          public $product = array();
          public function provideDescription() {
        
            
            foreach($this->products as $product) {
              echo $product->provideDescription() . '<br />';
            }
          }
          
          public function addProduct(Product $product){
            
            
             if($product instanceof Product) {
              $this->products[] = $product;
            } else {
              throw new Exception("Product not valid");
            }
        }
        
        
         public function getAllProducts() {
           return $this->products;
          }
          
          
          
          public function deleteProduct(Product $product){
            if(in_array($product, $this->products)) {
               $key = array_search($product, $this->products);
              unset($this->products[$key]);
         }   
     }
          
            public function deleteAll(Product $product){
               if(empty($this->products)) {
                    throw new Exception("No products in Wish List");
              }
              else {
                    foreach($this->products as $product) {
                        
                        unset($product);
               
                }
                
                return $this->products;
              }
              
        }
        
        
        public function getTotalPrice(){
            
             foreach ($this->products as $product) {
                    $total = $product->getPrice() + $total;
                }
                return $total;
        }
        
        public function findProductByName($name) {
            
            foreach($this->products as $key => $product) {
                 $names[] = $this->productsArray[$key]->getName();
                 if(in_array($name,$names)){
                        return $this->productsArray[array_search($name, $names)];
                 }
                 else {
                     throw new Exception("Can't find a product with that search :/ ");
                 }
              } // removes duplicate values
                  array_unique($names);
            
          }
        
          
        }
        
      
       
        
                  //    END OF SHOPPINGCART CLASS
        
        
        
        
        
         abstract class Product implements Describable  {
           protected $name,$price,$brand;
           
           public function __construct($name,$price,$brand){
             $this->name = $name;
             $this->price = $price;
             $this->brand = $brand;
           }
           
           
          abstract public function getDescriptionforProductType();
          
          
         public function provideDescription(){
          return $this->getDescriptionforProductType();
         }
         
          public function getName() {
           if (empty($this->name)) {
             throw new Exception("No name entered");
           } else {
             return $this->name;
           }
         }
         
           public function getPrice() {
           if(is_numeric($this->price) == false) {
             throw new Exception("Invalid price entered");
           } else {
             return $this->price;
           }
         }
          
           public function getBrand() {
            if(empty($this->brand)) {
              throw new Exception("No brand entered");
            } else {
              return $this->brand;
            }
          }
        
        
        
        
         }
        
        
        
        
      // START OF CLOTHING CLASS
         class Clothing extends Product  {
          protected $size,$color,$type,$gender;
          public $correct_Color = array("red, blue, green, black, white, yellow");
          
          
           
          public function __construct($name,$price,$brand,$size,$color,$type,$gender){
            parent::__construct($name,$price, $brand);
            
            
              $this->size = $size;
              $this->color = $color;
              $this->gender = $gender;
              $this->type = $type;
          }
          
          
          
          public function getSize(){
             if(empty($this->size)) {
              throw new Exception("No size entered");
            } else {
              return $this->size;
            }
          }
          
           public function getColor() {
            if(!empty($this->color)){
             if(in_array($this->color,$this->correct_Color)){
              return $this->color = $color;
             }
           }
           else{
             throw new Exception("Not a valid color");
           }
          }
          
          
           public function getType() {
            if(empty($this->type)) {
              throw new Exception("No type entered");
            } else {
              return $this->type;
            }
          }
          
          public function getGender() {
            if(empty($this->gender)) {
              throw new Exception("No gender entered");
              } else {
                return $this->gender;
              }
          }
          
           public function getDescriptionforProductType(){
           return " $ {$this->getPrice()} This is an article of 
            clothing.  It is a {$this->getName()},  {$this->getColor()},  {$this->getGender()} , {$this->getType()},  of size {$this->getSize()}. ";
         }
          
         
          
         
     }
          
        
         /*
        
                      END OF CLOTHING CLASS
        */
        
        
        
        
        
        
        
        
         /*
        
                      START OF TV CLASS
        */
        
        
         class Television extends Product {
          protected $displayType,$size;
          
          public function getDisplayType(){
              if(empty($this->displayType)){
                throw new Exception("Empty value found!");
              }else{
                return $this->displayType;
              }
            }
            
            public function getSize(){
              if(empty($this->size)){
                throw new Exception("Empty value found!");
              }else{
                return $this->size;
              }
            }
         
         
          
          public function __construct($name,$brand,$price,$displayType,$size){
            
            parent::__construct($name,$price,$brand);
            
            $this->displayType = $displayType;
            $this->size = $size;
          }
          
          
           public function getDescriptionforProductType(){
           
           return "$ {$this->getPrice()}  This is a {$this->size}in'  {$this->brand}
                 {$this->displayType} Television.";
          
         }
        }
        
        
         //                 END OF TV CLASS
             
      class ItemDescriber  {
        public function outputDescription ($product) {
            if ($product instanceof Describable) {
                return $product->provideDescription();
            } else {
              throw new Exception ("Item not describable");
            }
          }
 }
        
        
        
        $itemDescriber = new ItemDescriber();
        $shoppingCart = new ShoppingCart();
        $buttondownshirt = new Clothing("Button Down Shirt", 29.98, "J Peterman",29,"Eye piercingly bright red", "Shirt", "Male");
        $giantTV = new Television("Plasma",3900.90,"Visio","LED",100);
        $shoppingCart->addProduct($buttondownshirt);
        $shoppingCart->addProduct($giantTV);
        $shoppingCart->provideDescription();
       echo "<br />";
        $itemDescriber->outputDescription($shoppingCart);
        
        $shoppingCart->deleteProduct($buttondownshirt);
        echo "Total: {$shoppingCart->getTotalPrice()}";
       
        
        
        
        ?>
    </p>
  </body>
</html>