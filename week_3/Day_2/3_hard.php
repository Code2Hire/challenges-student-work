<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
        
        
        function createDeck() {
                  
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
            $deck = createDeck();
            
            function dealCards(&$deck, $number_of_cards = 0) {
                $playercards = array();
                
                for ($i = 1; $i <= $number_of_cards; $i++) {
                    $randsuit = rand(0, 3);
                
                    $suits = array_keys($deck);
                
                    $suit = $suits[$randsuit];
                
                    
                
                    $card = array_rand($deck[$suit], 1);
                
                    array_push($playercards, $card);
                    
                    unset($deck[$suit][$card]);
                }
                
                return $playercards;
                
            }

            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
            /*
             * Bring in your createDeck and dealCards function
               For the specified number of players below, assign each one an even set of cards.
               We will do this by counting out how many players there are, counting how many cards
               are in the deck. then dividing them so we know how many cards each player should get
             */

               $deck = 
               $num_players = 4;
               $num_cards_in_deck = //find a function to count the # of elements in an array
               $num_cards_to_give_each_player = 

                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                  $players = array(); 
                  for() {

                  }
               
               /*
               lets create a simple game
               each player will play a card and whoever has the highest value wins. if there are 2 cards played
               that have the same value everybody loses and that round is now a draw.

               store the results of each game in round_winners and also who won that round as the value.
               if the round is a draw store the value as DRAW

                use a loop to play each game until all oponents are out of cards

                Print out the array of all the rounds. if there was a draw the round should say DRAW
                if a player has one it should display "Player X" where X is the index of the player
                
               */

              $round_winners = 

        ?>

    </p>

    </body>
</html>
