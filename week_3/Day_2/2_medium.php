<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             *
 Lets bring in the deck code from the past example. (normal)
              create a function that will create a deck of cards, randomize it and then return the deck
             */

             function createDeck() {
                          
                  $suits = array ("clubs", "diamonds", "hearts", "spades");
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            $deck = array();
            foreach($suits as $suit) {
            
                
            
                //clubs
                foreach($faces as $key=>$face) {
                    $deck[$key . ' of ' . $suit] = $face;
                }
            

            }
               
                return $deck;
              }
                  
        
           
            function dealCards(&$deck, $number_of_cards = 0) {
                $playerCards = array();
                for($i=1; $i <=$number_of_cards; $i++) {
                    
                    $key = array_rand($deck);
                    $value = $deck[$key];
                    
                    if(isset($deck[$key])) {
                    $playerCards[$key] = $value;
                    unset($deck[$key]);
                    }
                }
                
                return $playerCards;

            }
                  
            $deck = createDeck();
        
            $player = dealCards($deck,10); // player should now have 10 random cards in his hand

            foreach($player as $suitName => $suitCards){
                print $suitName . " - " . $suitCards . "<br />";
             }

        ?>

    </p>

    </body>
</html>
