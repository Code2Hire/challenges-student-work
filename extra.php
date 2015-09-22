<?php

    
     
        
   class Item {
     
     public $name = "random string";
     public $price = 0;
     
     public function __construct($names,$prices){
         
          $this->name = $names;
          $this->price = $prices; 
         
         }
     }
    
     class ShoppingCart extends Item {
            
            public $items = array();
          
            
            function additem(Item $Item){
               
               $this->items[] = $Item;
               
            }   
            
        }
    
        
       

    $cart = new ShoppingCart();
    $cart->addItem(new Item('Cheap Book', 2.99));
    $cart->addItem(new Item('Expensive Book', 24.99));
    $cart->addItem(new Item('Movie', 12.99));
    $cart->addItem(new Item('Video Game', 59.99));
    var_dump($cart->items); 

        
        
       
    
?>