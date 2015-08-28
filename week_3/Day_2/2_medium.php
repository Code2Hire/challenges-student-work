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
             
             
             
             function shuffle_assoc(&$array) {
                $keys = array_keys($array);
        
                shuffle($keys);
        
                foreach($keys as $key) {
                    $new[$key] = $array[$key];
                }
        
                $array = $new;
        
                return true;
            }
             
             
             
             

              function createDeck() {
                  
                  

                     $suits = array ("clubs", "diamonds", "hearts", "spades");
                        $faces = array (
                            "Ace" => 1, 
                            "2" => 2,
                            "3" => 3, 
                            "4" => 4, 
                            "5" => 5, 
                            "6" => 6, 
                            "7" => 7,
                            "8" => 8, 
                            "9" => 9,  
                            "10" => 10, 
                            "Jack" => 11, 
                            "Queen" => 12, 
                            "King" => 13
                        );
                        $deck = array();
            

                        foreach($suits as $decksuit){
                            foreach($faces as $face => $value) {
                                $deck["$face of $decksuit"] = $value;
                            }
                        }
                        
                        shuffle_assoc($deck);
                                
                return $deck;
              }

            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be distributed
            */
            function dealCards(&$deck, $number_of_cards = 0) {
                
                $cardToReturn = array_slice($deck, 0, $number_of_cards);
                foreach($cardToReturn as $cardface => $value){
                    unset($deck[$cardface]);
                    
                }
                return $cardToReturn; 
            }
            
            $deck = createDeck();
            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
            var_dump($player);
            var_dump($deck);
        ?>

    </p>

    </body>
</html>
