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
            
                foreach($faces as $face=>$type){
                    //var_dump($type);//dumps only the integer value
                    //var_dump($face);//dumps the actual "Ace,king,Queen,etc
                    foreach($suits as $suit){
                        $i = "$face of $suit";
                        $deck[$i] = $face;       
                    }
                }
                $keys = array_keys($deck);////code obtained from array shuffle documentation
                shuffle($keys);
        
                foreach($keys as $key) {
                    $new[$key] = $deck[$key];
                }
                $deck = $new;
                //true;///not sure what this is for but seems to work either way
                
                
                
                return $deck;
              }
                $deck=createDeck();
                var_dump($deck);
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
            function dealCards(&$deck, $number_of_cards = 0) {
                $newCard = array_rand($deck, $number_of_cards);
                $dealt = array();
                for($i = 0; $i < count($newCard); $i++){
                    array_push($dealt, $newCard[$i]);
                    unset($deck[$newCard[$i]]);
                    }
                    
                return $dealt;
            }
            
            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
            echo "Hand dealt to player: ";
            echo "<br/>";
            var_dump($player);
        ?>

    </p>

    </body>
</html>
