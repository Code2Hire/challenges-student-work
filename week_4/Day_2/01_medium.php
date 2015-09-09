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
          
          public $items = array();
         public function provideDescription(){
            return "You have {$shoppingCart->getAllProducts()} in your shopping cart";
          }
          
          public function addProduct(Product $product){
            
             $item = $item;
                     // Throw an exception if its not an item
             if (!$item) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
             $this->items[] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
          public function deleteProduct(Product $product){
            if(isset($this->items[])){
              unset($this->items[]);
            }
          }
          
            public function deleteAll(Product $product){
              if($product == null){
              foreach($items as $product){
                deleteProduct($product);
              }
              }
              else
              throw new Exception("No instances of product");
              
        }
        
        
        public function getTotalPrice($price){
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
        
          
        }
        
      
       
        
                  //    END OF SHOPPINGCART CLASS
        
        
        
        
        
         abstract class Product implements Describable  {
           
           
           public function __construct($name,$price,$brand){
             $this->name = $name;
             $this->price = $price;
             $this->brand = $brand;
           }
           
           
          abstract public function getDescriptionforProductType();
           
          protected $name;
          protected $price;
          protected $brand;
          
          
          
          
          
         public function provideDescription(){
          return $this->getDescriptionforProductType();
         }
        
        }
        
        
        
        
        
        
        
      // START OF CLOTHING CLASS
         class Clothing extends Product  {
          protected $size,$color,$type,$gender;
          public $correct_Color = array("red, blue, green, black, white, yellow");
          
           public function getDescriptionforProductType(){
           return "This is an article of 
            clothing.  It is a {$this->getName()},  {$this->getColor()},  {$this->getGender()} , {$this->type},  of size {$this->getSize()}.  It costs {$this->price}";
         }
           
          public function __construct($name,$price,$brand,$size,$color,$type,$gender){
            parent::__construct($name,$price, $brand);
            
            
            $this->size = $this->setSize($size);
            $this->color = $this->setColor($color);
            $this->type = $this->setType;
            $this->gender = $this->setGender;
          }
          
          
          
          public function getSize($size){
            return $this->size;
          }
          
          public function setSize($size){
            if(!empty($size)){
              $this->size = $size;
            }
            else {
              throw new Exception("Not a valid size");
            }
          }
          
          
      
          public function getColor($color){
            
            return $this->color;
          }
          
          
          
          public function setColor($color){
           if(!empty($color)){
             if(in_array($color,$this->correct_Color)){
               $this->color = $color;
             }
           }
           else{
             throw new Exception("Not a valid color");
           }
            }
          
          
          
          public function getType($type){
            return $this->type;
          }
          
          public function setType($type){
            if(!empty($type)){
              $this->type = $type;
            }
            else {
              throw new Exception("Not a valid type");
            }
          }
          
          public function getGender($gender){
            $this->gender = $gender;
          }
          
          public function setGender($gender){
            if(!empty($gender)){
              $this->gender = $gender;
            }
            else 
              throw new Exception("Not a valid gender");
          }
          
        
        
        
        public function getPrice($price){
          $this->price = $price;
        }
        
        public function setPrice($price){
          if(!empty($price) && is_numeric($price)){
            $this->price = $price;
          }
          else
            throw new Exception("Not a valid price");
        }
        }
        
        
        
         /*
        
                      END OF CLOTHING CLASS
        */
        
        
        
        
        
        
        
        
         /*
        
                      START OF TV CLASS
        */
        
        
         class Television extends Product {
          protected $name,$price,$brand,$displayType,$size;
          
           public function getDescriptionforProductType(){
           
           return "This is a {$this->size} {$this->brand}
          {$this->displayType} Television";
          
         }
         
         
         public function getSize($size){
          $this->size = $size;
         }
         
         public function setSize($size){
           if(!empty($size)){
             $this->size = $size;
           }
             else 
              throw new Exception("Not a valid size");
           }
         
         
          
          public function __construct($name,$price,$brand,$displayType,$size){
            
            parent::__construct($name,$price,$brand);
            
            $this->displayType = $displayType;
            $this->size = $size;
          }
        }
        
        
         //                 END OF TV CLASS
             
      class ItemDescriber extends Product implements Describable {
        public function outputDescription(Describable $shoppingCart){
         return $shoppingCart->provideDescription();
      }
        
        
        
        $itemDescriber = new ItemDescriber();
        $shoppingCart = new ShoppingCart();
        $buttondownshirt = new Clothing("Button Down Shirt", 29.98, "J Peterman",29,"Eye piercingly bright red", "Shirt", "Male");
        $shoppingCart->addProduct($buttondownshirt);
        echo $buttondownshirt->provideDescription();
        
        $itemDescriber->provideDescription();
        $giantTV = new Television("Giant TV",3900.90,"Kramerica","LED",100);
        $shoppingCart->addProduct($giantTV);
        echo "<br />";
        echo $giantTV->provideDescription();
       echo $shoppingCart->provideDescription();
        $itemDescriber->provideDescription();
        echo $shoppingCart->getTotalPrice($shoppingCart);
        $shoppingCart->deleteProduct($buttondownshirt);
        
       
        
        
        
        ?>
    </p>
  </body>
</html>