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
          
          public function provideDescription() {
            return $this->provideDescriptionForProductType();
          }
          
          abstract public function provideDescriptionForProductType();
          
          public function getName() { 
            if (!empty($this->name)) { 
              return $this->name;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getBrand() { 
            if (!empty($this->brand)) { 
              return $this->brand;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getPrice() { 
            if (!empty($this->price)) { 
              
              
              if(is_numeric($this->price)) {
              return $this->price;
            } 
            else { 
              throw new Exception('Not a valid number');
            }
            
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          }
        } 
        
        class CloudMovieFile implements Describable { 
          
          public function provideDescription() { 
            return "This is a cloud movie.";
          }
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
            if($item instanceof Product) { 
              return $this->item;
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
          
          public function findProductByName() { 
          } 
          
          
        } 
        
        class Clothing extends Product { 
          protected $color;
          protected $type;
          protected $gender;
          
          public function getColor() { 
            if (!empty($this-color)) { 
              
              if (in_array($this->color, array("red", "blue", "green", "black", "white", "yellow"))) { 
              return $this->color; 
            } 
            else { 
              throw new Exception('Not a valid color');
            }
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getType() { 
            if (!empty($this->type)) {
              return $this->type;
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function getGender() { 
            if (!empty($this->gender)) { 
              return $this->gender;
            } 
            else {
              throw new Exception('Empty value found');
            } 
          } 
          
          public function getSize() { 
            if (!empty($this->size)) { 
              return $this->size;
            } 
            else { 
              throw new Exception('Empty value found');
            } 
          }
          
          public function __construct($name, $brand, $price, $color, $type, $gender, $size) {
            parent::__construct($name, $brand, $price);
            $this->color = $color;
            $this->type = $type;
            $this->gender = $gender;
            $this->size = $size;
          } 
          
          public function provideDescriptionForProductType() { 
            return "It is a {$this->getName()} {$this->getBrand()} {$this->getColor()} {$this->getGender()} {$this->getType()} of {$this->getSize()} size.  It costs {$this->getPrice()}.";
          } 
        } 
         
        class Television extends Product { 
          protected $displayType; 
          protected $size;
          
          public function getDisplayType() { 
            if(!empty($this->displayType)) { 
              return $this->displayType; 
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function getSize() { 
            if(!empty($this->size)) { 
              return $this->size;
            } 
            else { 
              throw new Exception('Empty value found');
            }
          } 
          
          public function __construct($name, $brand, $price, $displayType, $size) { 
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType; 
            $this->size = $size; 
          } 
          
          public function provideDescriptionForProductType() { 
            return "This is a {$this->getSize()} {$this->getBrand()} {$this->getDisplayType()} Television. It costs {$this->getPrice()}.";
          } 
        } 
      
        $buttonShirt = new Clothing("Button Down Shirt", "J Peterman", "29.88", "red", "Shirt", "Male", "large");
        $headband = new Clothing("Headband", "Nikee", "9.00", "yellow", "Headgear", "Neutral", "one size fits all");
        $giantTV = new Television("Giant TV", "Kramerica", "3900.90", "LED", "100 inches");
        $childTV = new Television("Child Television", "ChildCorp", "299.00", "Plasma", "23x33");
        $newMovie = new CloudMovieFile("Willy Wonka", "Mel Stuart", "Fantasy");
        $newThing = new ItemDescriber();
        $cartOfShopping = new ShoppingCart();
        
        
        $customerItems = array($buttonShirt, $giantTV, $newMovie);
        foreach($customerItems as $item) { 
          echo $newThing->outputDescription($item);
        } 
        
        try { 
          $newThing->outputDescription($item);
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
        try { 
          echo $buttonShirt->provideDescription();
          echo "<br/>"; 
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
        try { 
          echo $headband->provideDescription();
          echo "<br/>"; 
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        } 
        
        try { 
          echo $giantTV->provideDescription(); 
          echo "<br/>";
        } 
        catch (Exception $E) {
          echo $E->getMessage();
        } 
        
        try { 
          echo $childTV->provideDescription();
        } 
        catch (Exception $E) { 
          echo $E->getMessage();
        }
        ?>
    </p>
  </body>
</html>