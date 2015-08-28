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
        
        class ItemDescriber {
          public function outputDescription ($customerItem) {
            if ($customerItem instanceof Describable) {
                return $customerItem->provideDescription();
            } else {
              throw new Exception ("Item not describable");
            }
          }
        }
        
        class ShoppingCart implements Describable {
          public $products = array();
          
          public function provideDescription() {
            
            $productDescriptions = array();
            
            foreach($this->products as $product) {
              array_push($productDescriptions, $product->provideDescriptionForProductType());
            }
            return $productDescriptions;
          }
          
          public function addProduct(Product $product) { 
            if($product instanceof Product) {
              $this->products[] = $product;
            } else {
              throw new Exception("Product not valid");
            }
        }
        
          public function removeProduct($product) {
            if(in_array($product, $this->products)) {
              unset($this->products[$product]);
              return $this->products;
            } else {
              throw new Exception("Product not in cart");
            }
          }
          
          public function removeAllProducts($product) {
            if(empty($this->products)) {
              throw new Exception("No products in cart");
              } else {
                foreach($this->products as $product) {
                unset($product);
                }
                return $this->products;
              }
          }
          
          public function getTotalPrice() {
            foreach ($this->products as $product) {
                $totalprice = $product->price + $totalprice;
                
            }
            return 'Total Price: ' . $totalprice;
          }
          
          public function getAllProducts() {
            return $this->products;
          }
          
          public function findProductByName($name) {
            foreach($this->products as $product) {
              if($product->name == $name) {
                return $product;
              } else {
                throw new Exception("No product with given name found in cart");
              }
            }
          }
        }
        
        abstract class Product implements Describable {
          public $name;
          public $brand;
          public $price;
          
          public function __construct($name, $brand, $price) {
            
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            
            
          }
          
          abstract function provideDescriptionForProductType();
          
          public function provideDescription() {
            
            return $this->provideDescriptionForProductType();
            
          }
         
         public function getName() {
           if (empty($this->name)) {
             throw new Exception("No name entered");
           } else {
             return $this->name;
           }
         } 
         
         public function getBrand() {
           if(empty($this->brand)) {
             throw new Exception("No brand entered");
           } else {
             return $this->brand;
           }
         }
         
         public function getPrice() {
           if(is_numeric($this->price) == false) {
             throw new Exception("Invalid price entered");
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
          
          public function __construct($name, $brand, $price, $size, $color, $type, $gender) {
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
            
            public function getSize() {
              if(empty($this->size)) {
                throw new Exception("No size entered");
              } else {
                return $this->size;
              }
            }
            
            public function provideDescriptionForProductType() {
              return 'This is a ' . $this->getSize() . ' ' . $this->getBrand() . ' ' . $this->getname() . ' ' . $this->getDisplayType() . ' Television <br />';
            }
        }
        
        $cart = new ShoppingCart();
        $cart->addProduct(new Clothing("Hoodie", "Nike", 19.99, "large", "red", "shirt", "male"));
        $cart->addProduct(new Television("Plasma", "Sony", 1000.00, plasma, "50in"));
        
        var_dump($cart->provideDescription());
        echo "<br />";
        echo $cart->getTotalPrice(); //displays any error because it is protected, if i make public it displays nothing (why)
         
         
        
        ?>
    </p>
  </body>
</html>