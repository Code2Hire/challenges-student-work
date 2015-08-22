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
            
            
            
            function createDeck() { //turns code from previous execise into a function
                  
                $suits = array ("clubs", "diamonds", "hearts", "spades"); 
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
                );
                
                $deck = array();

                foreach($suits as $suit) {
                
                    $suitcards = array();
                
                    foreach($faces as $key => $face) {
                        $suitcards[$key . ' of ' . $suit] = $face;
                    }
                    
                    $deck[$suit] = $suitcards;
                
                }
                
                return $deck;
              }

            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
            $deck = createDeck(); //fills $deck using createDeck function
            
            function dealCards(&$deck, $number_of_cards = 0) { //function to deal cards
                $playercards = array(); //array for a hand of cards
                
                for ($i = 1; $i <= $number_of_cards; $i++) {
                    $randsuit = rand(0, 3);
                
                    $suits = array_keys($deck); //sets $suits to array keys of $deck array
                
                    $suit = $suits[$randsuit]; //pulls a random suit
                
                    
                
                    $card = array_rand($deck[$suit], 1); //to pick a random card// first pick random suit
                
                    array_push($playercards, $card);  //pushes $card into hand or $playercards array
                    
                    unset($deck[$suit][$card]); //removes that card from deck
                }
                
                return $playercards; //saves data
                
            }

            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
            
            var_dump($player);
            
            var_dump($deck);

        ?>

    </p>

    </body>
</html>
