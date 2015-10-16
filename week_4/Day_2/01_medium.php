<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
        <?
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
        interface Describable {
          public function provideDescription();
        }
        
        class ShoppingCart {
            public $cartItems = array();
            
            public function provideDescription($product) {
                return $this->description;
            }
            
            public function addItem($item) {
                $this->cartItems[] = $item;
            }
            
            public function removeOne($item) {
                foreach($this->cartItems as $value) {
                    if($this->name == $value) {
                        unset($value);
                    }
                }
            }
            
            public function removeAll($item) {
                for($i=0; $i < count($cartItems); $i++) {
                    foreach($this->cartItems as $value) {
                        if($this->name == $value) {
                            unset($value);
                        }   
                    }
                }
            }
            
            public function getTotalPrice() {
                foreach($this->cartItems as $value) {
                    $totalPrice += $value->price;
                }
                return $totalPrice;
            }
            
            public function getAllProducts() {
                return $this->cartItems;
            }
            
            public function findProductByName($name) {
                foreach($this->cartItems as $value) {
                    if($name == $value->name) {
                        return $this->product;
                    }
                }
            }
            
        }
        
        abstract class Product implements Describable{
            protected $name;
            protected $brand;
            protected $price;
          
            public function __construct($name, $brand, $price) {
          
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            
            }
          
            abstract function provideDescriptionForProductType();
          
            public function provideDescription(){
                return $this->provideDescriptionForProductType();
            }
          
            public function getName(){
                if($this->name){
                  return $this->name;
                } else{
                  throw new Exception("Empty value found for name");
                }
            }
  
            public function getPrice(){
                if($this->price){
                  
                      if(is_numeric($this->price)){
                        return $this->price;
                      } else {
                      throw new Exception("Invalid Price"); 
                      }
                
                } else {
                  throw new Exception ("Empty value found for price");
                }
            }
            
          public function getBrand(){
                if($this->brand){
                    return $this->brand;
                } else {
                    throw Exception("Empty value found for brand");
                }
          }
          
        }
    ///////////////////////////
    
    $cart = new ShoppingCart();
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));
    
    echo "<p>Total cost before tax: \${$cart->getCostBeforeTax()}</p>";
    echo "<p>Tax amount: \${$cart->getTaxAmount()}</p>";
    echo "<p>Total cost after tax: \${$cart->getCostAfterTax()}</p>";
    
        ///////////////////////////
        ?>
    </p>
  </body>
</html>