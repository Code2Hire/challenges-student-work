<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
        <?
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
        class WishList extends ProductContainer{
          abstract public function getDescriptionforProductType();
           
          protected $name;
          protected $price;
          protected $brand;
          
          
          abstract function addProduct(Product $product){
            
            
                     // Throw an exception if its not an item
             if (!$item) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
             $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
          
          abstract function deleteProduct(Product $product){
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
        
           abstract function getTotalPrice($price){
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
          
          
        }
        
        // END OF WISHLIST CLASS
        
        
        
        
        abstract class ProductContainer {
          
          
          static public function createCartFromContainer($productContainer){
            $shoppingCart_ins = new ShoppingCart();
          }
          
          
          
          
          
          
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
             $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
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
        
        
        public function getTotalPrice($price){
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
        
        
        
        }
        
        
        class ShoppingCart extends ProductContainer {
           
          public function addProduct(Product $product){
            
             $item = $item;
                     // Throw an exception if its not an item
             if (!$item) throw new Exception('The cart requires items with unique ID values.');
                    // Add or update:
             if (isset($this->items[$items])) {
                $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } 
          else {
             $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
          }
          
          
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
        
        
        public function getTotalPrice($price){
          foreach($items as $product){
            $sum = getPrice($product);
            print_r($sum);
          }
        }
        }
        
        
        ?>
    </p>
  </body>
</html>