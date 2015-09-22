<!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
    
    <?php
        class ShoppingCart {
            
            public $arrays = array();
            
           
            public function addItem($item){
                
                $this->arrays[] = $item;
               
            }
        }
    
    $w1 = array('Book' =>'Cheap Book','Price'=> 2.99);
    $w2 = array('Book' =>'Expensive Book','Price'=>  24.99);
    $w3 = array('Book' =>'Movie','Price'=> 12.99);
    $w4 = array('Book' =>'Video Game','Price'=> 59.99);
    $cart = new ShoppingCart();
    $cart->addItem($w1);
    $cart->addItem($w2);
    $cart->addItem($w3);
    $cart->addItem($w4);
    var_dump($cart->arrays);


        ?>
        </body>
    </html>