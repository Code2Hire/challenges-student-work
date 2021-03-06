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

        class WishList extends ProductContainer{
          abstract public function getDescriptionforProductType();
           
          protected $name;
          protected $price;
          protected $brand;
          
          
          abstract function addProduct(Product $product){
            
            
                     // Throw an exception if its not an item

             if (!$product) throw new Exception('The cart requires products with unique ID values.');
=======
             if (!$item) throw new Exception('The cart requires items with unique ID values.');

                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
             $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
        // if you are actually implementing a function, it should not have the
        // keyword abstract in front of it...only unimplemented classes in
        // the abstract class should have abstract there.  You will still need
        // to have public there
        // @advice
          public function deleteProduct(Product $product){
            if(isset($this->items[$items])){
              unset($this->items[$items]);
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
        
        // if you are actually implementing a function, it should not have the
        // keyword abstract in front of it...only unimplemented classes in
        // the abstract class should have abstract there.  You will still need
        // to have public there
        // @advice
           public function getTotalPrice($price){
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
          
          
        }
        
        // END OF WISHLIST CLASS
        
        
        // You should move all of the functionality that would be shared from the previous
        // exercise in here.  For instance, you should have pretty much all of the 
        // 7 methods from the medium exercise in this class instead of your
        // shopping cart class.
        // @advice
        // This is the class

        abstract class ProductContainer implements Describable {
          
           abstract function provideDescription();
           abstract function addProduct($product);
           abstract function countItems();
           abstract function getTotalPrice();
           abstract function deleteProduct($product);
           abstract function deleteAll();
           abstract function getAllProducts();
           abstract function findProductByName($name);
          static public function createCartFromContainer($productContainer){

        abstract class ProductContainer {
          
          
          static public function createCartFromContainer($productContainer){

            
            $shoppingCart_ins = new ShoppingCart();
            // you're starting in the right spot.
            // Now, take all the products from the product coantiner that you are passing
            // in and add them to the shopping cart.  Then return the shopping cart
            // @advice
          }
          
          
          
          
          
          

          public $products = array();


         public function provideDescription(){
            return "You have {$shoppingCart->getAllProducts()} in your shopping cart";
          }
          
          public function addProduct(Product $product){
            

             $this->products[] = $product;
                     
             if (!$product) throw new Exception('The cart requires items with unique ID values.');
                   
             if (isset($this->products[$products])) {
                $this->updateItem($product, $this->products[]['qty'] + 1);
    } 
          else {
             $this->products[$] = array('product' => $product, 'qty' => 1);

             public $items = array();
                     // Throw an exception if its not an item
             if (!$item) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
             $this->items[] = array('product' => $product, 'qty' => 1);
    }
          }
          
            
          public function addProduct(Product $product){
              // where is item (or items) coming from?
              // You are probably trying to reference them with $this, but
              // you would still cause some issues, especially with $this->items[$items]
             $item = $item;
                     // Throw an exception if its not an item
             if (!$item) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
            // where did $id come from?  It doesnt look initialized to me
             $this->items[$id] = array('item' => $item, 'qty' => 1);

    }
          }
          
          
          public function deleteProduct(Product $product){

            // where did $items come from?  If it is not a number or a string, it doesn't
            // make sense to reference an array key by anything else
            if(isset($this->products[$products])){
              unset($this->products[$products]);

            // where is $items coming from here?
            if(isset($this->items[$items])){
              unset($this->items[$items]);
            }
          }
          
            public function deleteAll(Product $product){
              
              if($product == null){
              foreach($items as $product){
                // delete product is a method on this object...access it using $this->deleteProduct($product)
                deleteProduct($product);
              }
              }
              else
              throw new Exception("No instances of product");
              
        }
          
          
          public function deleteProduct(Product $product){
            // where did $items come from?  If it is not a number or a string, it doesn't
            // make sense to reference an array key by anything else
            if(isset($this->items[$items])){
              unset($this->items[$items]);

            }
          }
          
            public function deleteAll(Product $product){
              if($product == null){
              foreach($items as $product){
                  // delete product is a method on this object...access it using $this->deleteProduct($product)
                $this->deleteProduct($product);
              }
              }
              else
              throw new Exception("No instances of product");
              
        }
        
        
        public function getTotalPrice($price){
          // no reference to items, you are probably trying to reference $this->items
          // Also, i don't see getPrice as a function...is that a method on the product.
          // if so, it would be something like $product->getPrice()

          $this->products;
          foreach($products as $product){
            $sum = $product->getPrice($product);

          foreach($items as $product){
            $sum = getPrice($product);

            print_r($sum);
          }
        }
        
        
        
        }
        
        // Move all of the methods from this class to the product container.  You've started
        // there, but havent quite finished
        // @advice
        class ShoppingCart extends ProductContainer {

           
          public function addProduct(Product $product){
              // where is item (or items) coming from?
              // You are probably trying to reference them with $this, but
              // you would still cause some issues, especially with $this->items[$items]
             
                     // Throw an exception if its not an item
             if (!$product) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->products[$products])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
            // where did $id come from?  It doesnt look initialized to me
             $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
          public function deleteProduct(Product $product){
            // where is $items coming from here?
            if(isset($this->items[$items])){
              unset($this->items[$items]);
            }
          }
          
            public function deleteAll(Product $product){
              
              if($product == null){
              foreach($items as $product){
                // delete product is a method on this object...access it using $this->deleteProduct($product)
                deleteProduct($product);
              }
              }
              else
              throw new Exception("No instances of product");
              
        }

        
        
        public function getTotalPrice($price){
          // no reference to items, you are probably trying to reference $this->items
          // Also, i don't see getPrice as a function...is that a method on the product.
          // if so, it would be something like $product->getPrice()
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
        }
        
        
        
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