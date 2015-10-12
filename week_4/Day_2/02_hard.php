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
          
          public function provideDescription();
          
        }
        
        
        
         abstract class ProductContainer implements Describable {
          abstract function provideDescription();
          abstract function addProduct($product);
          abstract function deleteProduct($product);
          abstract function deleteAllProducts($product);
          abstract function getTotalPrice();
          abstract function getAllProducts();
          abstract function findProductByName($name);
          
          public static function createCartFromContainer($productContainer) {
            $ShoppingCart = new ShoppingCart();
            
            if($productContainer instanceof ProductContainer) {
              $products = $productContainer->getAllProducts();
              
              foreach($products as $product) {
                $ShoppingCart->addProduct($product);
              }
              return $ShoppingCart;
            } else {
              throw new Exception("Unable to create cart from container.");
            }
          }
        }
        
       
        
        abstract class Product implements Describable {
          
          protected $name,$price,$brand;
          
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
          public $correct_Color = array("red, blue, green, black, white, yellow");
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
          
          public function provideDescriptionForProductType() {
            try {
            return " $ {$this->getPrice()} This is an article of 
            clothing.  It is a {$this->getName()}  {$this->getColor()},  {$this->getGender()} , {$this->getType()},  of size {$this->getSize()}. ";
            } catch(Exception $e) {
                echo 'There was an error determining the description to this product <br />' . $e->getMessage() . '<br />';
            }
          }
          
        }
        
        class Television extends Product {
            protected $displaytype,$size;
            
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
            
            public function __construct($name, $brand, $price, $displaytype, $size) {
              parent::__construct($name, $brand, $price);
              
              $this->displaytype = $displaytype;
              $this->size = $size;
            }
            
           
            
            public function provideDescriptionForProductType(){
           
              return "$ {$this->getPrice()}  This is a {$this->getSize()}in'  {$this->brand} {$this->getDisplayType()} Television.";
            }
          
         
        }
        
       
          
        class ShoppingCart extends ProductContainer {
          public $products = array();
          
          public function provideDescription() {
            echo 'Container Type: Shopping Cart <br />';
            
            foreach($this->products as $product) {
              echo  $product->provideDescription();
            }
          }
          
          public function addProduct($product) { 
            if($product instanceof Product) {
              $this->products[] = $product;
            } else {
              throw new Exception("Product not valid");
            }
        }
        
           public function deleteProduct($product){
            if(in_array($product, $this->products)) {
               $key = array_search($product, $this->products);
              unset($this->products[$key]);
         }   
     }
          
            public function deleteAllProducts($product){
               if(empty($this->products)) {
                    throw new Exception("No products in Shopping Cart");
              }
              else {
                    foreach($this->products as $product) {
                        
                       $this->deleteProduct($product);
               
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
          
          public function getAllProducts() {
            return $this->products;
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
              } // removes duplicate values http://us2.php.net/manual/en/function.array-unique.php
                  array_unique($names);
            
          }
        }
        
        class WishList extends ProductContainer {
          public $products = array();
          
          public function provideDescription() {
            echo 'Container Type: Wish List <br />';
            
            foreach($this->products as $product) {
              echo $product->provideDescription() . '<br />';
            }
          }
          
          public function addProduct($product) { 
            if($product instanceof Product) {
              if(!(in_array($product, $this->products))) {
              $this->products[] = $product;
              } else {
                throw new Exception("Item already in Wish List");
              }
            } else {
              throw new Exception("Product not valid");
            }
        }
        
          public function deleteProduct($product) {
            if(in_array($product, $this->products)) {
               $key = array_search($product, $this->products);
              unset($this->products[$key]);
            } else {
              throw new Exception("Product not in Wish List");
            }
          }
          
          public function deleteAllProducts($product) {
            if(empty($this->products)) {
              throw new Exception("No products in Wish List");
              } else {
                foreach($this->products as $product) {
                  
                  $this->deleteProduct($product);
                 
                }
                return $this->products;
              }
          }
          
          public function getTotalPrice() {
            
            
            
            foreach ($this->products as $product) {
                $totalprice = $product->getPrice() + $totalprice;
                
            }
            return "Total Price: " . $totalprice;
          }
          
          public function getAllProducts() {
            return $this->products;
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
              } // removes duplicate values http://us2.php.net/manual/en/function.array-unique.php
                  array_unique($names);
            
          }
        }
        
        
         class ItemDescriber {
          public function outputDescription ($product) {
            if ($product instanceof Describable) {
                return $product->provideDescription();
            } else {
              throw new Exception ("Item not describable");
            }
          }
        }
         
        $itemDescriber = new ItemDescriber();
        $Cardigan = new Clothing("Cardigan", "ASOS", 39.99, "large", "gray", "shirt", "male");
        $GiantTV = new Television("Giant TV","Visio",3900.90,"LED",100);
        $wishList = new WishList();
        $wishList->addProduct($Cardigan);
        $wishList->addProduct($GiantTV);
        $shoppingCart = $wishList->createCartFromContainer($wishList);
       
        $wishList->provideDescription();
        
        $shoppingCart->provideDescription();
        
        
        
        ?>
    </p>
  </body>
</html>