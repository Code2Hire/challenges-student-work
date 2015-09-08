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

       
       interface Describable {
          public function provideDescription();
       }

       class ItemDescriber {
           public function outputDescription($Describable) {
               if ($Describable instanceof Describable) {
                   return $Describable->provideDescription();
               } else {
                   throw new exception('is not a method describable');
               }
           }
       }

       class ShoppingCart implements Describable {
       
          public  $products = array();
       
           public function provideDescription() {
               try {
                   echo "This Cart Contains : " . "<br />";
                   foreach($this->products as $product) {
                     return ($product->name);
    
                       
                   }
               } catch (Exception $e) {
                   echo 'There was an error determining the description to this product <br />' . $e->getMessage() . '<br />';
               }
       
           }
       
           public function addProduct($product) {
                if($product instanceof Product) {
                    $this->products[$product->name] = $product;
                   
                    return true;
                } else {
                    throw new Exception("Not an instance of Product");
                }

            }
       
           public function removeOne($parameter) {
             foreach($this->products as $product) {}
                foreach($this->products as $item) {
                    if($product->name == $item->name) {                   
                     unset($this->products[$product->name]);
                    }
                }
 
          }
       
            public function removeAll($product) {
                foreach($this->products as $item) {

                     if($product->name == $item->name) {
                         unset($this->products[$product->name]);
                     }
                }
            }

            public function getTotalPrice() {
             $sum = 0;
                foreach($this->products as $product) {
                        $sum += $product->price;
                }
                     return $sum;
            }

            public function getName($product) {
              foreach($this->products as $item) {

                 if($product->name == $item->name) {
                    return $product->name;
                 }
              }
            }
        }

        abstract class Product implements Describable{
                public $name;
                public  $brand;
                public  $price;

            public function __construct($name, $brand, $price){
    
                $this->name = $name;
                $this->brand = $brand;
                $this->price = $price;

            }

            abstract function provideDescriptionForProductType();

            public function provideDescription(){
                return $this->provideDescriptionForProductType;
            }

            public function cleanname(){
    
                if (empty($this->name)) {
                    throw new exception('is empty');
                } else {
                    return $this->name;
                  }
            }

             public function clenbrand(){
    
                if (empty($this->brand)) {
                    throw new exception('is bad');
                } else {
                    return $this->brand;
                }
             }

             public function cleanprice(){
    
                if (empty($this->price)) {
                 throw new exception('is free');
                 } else {
                    return $this->price;
                 }
             }
        }   
        
        class Clothing extends Product {
            protected $size;
            protected $color;
            protected $type;
            protected $gender;
        
            public function __construct($name, $brand, $price, $size, $color, $type, $gender){
                parent::__construct($name, $brand, $price);
                $this->size = $size;
                $this->color = $color;
                $this->type = $type;
                $this->gender = $gender;
            }
            public function getSize() {
                if(empty($this->size)) {
                    throw new Exception("No size entered");
                } else {
                    return $this->size;
                }
            }
        
            public function getColor() {
                if((($this->color == "red") || ($this->color == "blue") || ($this->color == "green") || ($this->color == "black") || ($this->color == "white") || ($this->color == "yellow")) == false) {
                    throw new Exception("Invalid color entered");
                } else {
                    return $this->color;
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
        
            public function provideDescriptionForProductType() {
                try {
                    return 'This is an article of clothing. It is a ' .  $this->getBrand() . ' ' . $this->getColor() . ' ' . $this->getGender() . ' ' . $this->getType() . ' of size ' . $this->getSize() .  '. It costs ' . $this->getPrice() . '.';
                } catch(Exception $e) {
                    echo 'There was an error determining the description to this product <br />' . $e->getMessage() . '<br />';
                }
            }
        
        }

        class Television extends Product {
            protected $displaytype;
            protected $size;
        
            public function __construct($name, $brand, $price, $displaytype, $size) {
                parent::__construct($name, $brand, $price);
        
                $this->displaytype = $displaytype;
                $this->size = $size;
            }
        
            public function getDisplayType() {
                if(empty($this->displaytype)) {
                    throw new Exception("No display type entered");
                } else {
                    return $this->displaytype;
                }
            }
        
            public function getBrand() {
                if(empty($this->displaytype)) {
                    throw new Exception("No display type entered");
                } else {
                    return $this->brand;
                }
            }
        
            public function getSize() {
                if(empty($this->size)) {
                    throw new Exception("No size entered");
                } else {
                    return $this->size;
                }
            }
        
            public function provideDescriptionForProductType() {
                try {
                    return 'This is a ' . $this->getSize() . ' ' . $this->getBrand() . ' ' . $this->getDisplayType() . ' Television';
                }catch(Exception $e) {
                    echo 'There was an error determining the description to this product <br />' . $e->getMessage() . '<br />';
                }
            }
        }
        
        
        $TV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100inch");
        $clothing = new Clothing("Headband", "Nikee", 80, "large", "magenta", "headgear", "neutral");
        
        $items = array($TV, $clothing);
        
        $cart = new ShoppingCart();
        foreach($items as $item) {
            $cart->addProduct($item);
        }
        
        $cart->provideDescription();
        echo $cart->getTotalPrice() . "<br />";
        $cart->removeAll($clothing);
        echo $cart->getName($TV) . "<br />";


        
        
        
        
        
        
        
        
        
        
        ?>
    </p>
  </body>
</html>