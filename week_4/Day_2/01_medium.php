<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
<<<<<<< HEAD
        <?php
=======
        <?
>>>>>>> new-challenges/master
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
<<<<<<< HEAD
         * 1. Create at least one Clothing Object and one Television Object. DONE
         * 2. Create a shopping cart instance. DONE
         * 3. Add the two products to the cart.
         * 4. Print out the description of the cart. DONE
         * 5. Print out the total price of the cart.
         * 6. Remove the Clothing object from your cart.
         * 7. Find the product in the cart with the name of your Television Object.
=======
         * 1. Create at least one Clothing Object and one Television Object.
         * 2. Create a shopping cart instance.
         * 3. Add the two products to the cart.
         * 4. Print out the description of the cart.
         * 5. Print out the total price of the cart.
         * 6. Remove the Clothing object from your cart.
         * 7. FInd the product in the cart with the name of your Television Object.
>>>>>>> new-challenges/master
         * 8. Pass your ShoppingCart into the ItemDescriber outputDescription method from Exercise 4 and see
         * how it will also output the description of your cart, just like it did your individual products
         */

        ///////////////////////////
<<<<<<< HEAD
        //  Put your code here!  //
        ///////////////////////////
        interface Describable { 
          public function provideDescription();
        } 
        abstract class Product implements Describable { 
          protected $name;
          protected $brand;
          protected $price;
          
          public function __construct($name, $brand, $price) { 
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
          } 
          
          public function getPrice() { 
            return $this->price = $price;
          } 
          
          public function provideDescription() {
            return $this->provideDescriptionForProductType();
          }
          
          abstract public function provideDescriptionForProductType();
        } 
        
        class ItemDescriber { 
          public function outputDescription($item) { 
            if ($item instanceof Describable) {
              return $item->provideDescription();
            }
            throw new Exception("Not valid :(");
          } 
        } 
        
        class ShoppingCart implements Describable { 
          public function provideDescription() { 
            return "This is your completely amazing shopping cart bro";
          } 
          
          public function addProduct($product) { 
            array_push($coolProducts, $product);
            
            if($product instanceof Product) { 
              return $this->product;
            } 
            throw new Exception("This item is not a valid product.");
          } 
          
          public function removeOne($product) { 
          
          } 
          
          public function removeAll($product) { 
            
          } 
          
          public function getTotalPrice() { 
          } 
          
          public function getAllProducts() { 
          } 
          
          public function findProductByName($name) { 
          } 
          
          
        } 
        
        class Clothing extends Product { 
          protected $color;
          protected $type;
          protected $gender;
          
          
          public function __construct($name, $brand, $price, $color, $type, $gender, $size) {
            parent::__construct($name, $brand, $price);
            $this->color = $color;
            $this->type = $type;
            $this->gender = $gender;
            $this->size = $size;
          } 
          
          public function provideDescriptionForProductType() { 
            return "It is a {$this->name} {$this->brand} {$this->color} {$this->gender} {$this->type} of {$this->size} size.  It costs {$this->price}.";
          } 
        } 
         
        class Television extends Product { 
          protected $displayType; 
          protected $size;
          
          public function __construct($name, $brand, $price, $displayType, $size) { 
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType; 
            $this->size = $size; 
          } 
          
          public function provideDescriptionForProductType() { 
            return "This is a {$this->size} {$this->brand} {$this->displayType} Television. It costs {$this->price}.";
          } 
        } 
        
        $coolProducts = array();
      
        $buttonShirt = new Clothing("Button Down Shirt", "J Peterman", "29.88", "red", "Shirt", "Male", "large"); // new instance of clothing
        $giantTV = new Television("Giant TV", "Kramerica", "3900.90", "LED", "100 inches"); // new instance of televison
        $cartOfShopping = new ShoppingCart(); // new instance of shopping cart
        // $newThing = new ItemDescriber(); idk if I still need this i'll find out soon enough
        
        echo $buttonShirt->provideDescription(); 
        echo "<br/>";
        echo $giantTV->provideDescription();
        echo "<br/>";
        echo $cartOfShopping->provideDescription();
        
        
        /* $customerItems = array($buttonShirt, $giantTV, $newMovie);
        foreach($customerItems as $item) { 
          echo $newThing->outputDescription($item);
        } 
        
        try { 
          $newThing->outputDescription($item);
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        */ 
=======
        // Put your code here!
        ///////////////////////////
>>>>>>> new-challenges/master
        ?>
    </p>
  </body>
</html>