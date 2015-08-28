<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Bring in your createDeck and dealCards function
               For the specified number of players below, assign each one an even set of cards.
               We will do this by counting out how many players there are, counting how many cards
               are in the deck. then dividing them so we know how many cards each player should get
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
            
            $player = dealCards($deck,10);
               $deck = createDeck();
               $num_players = 4;
               $num_cards_in_deck = count($deck);//find a function to count the # of elements in an array
               $num_cards_to_give_each_player = $num_cards_in_deck/$num_players

                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                  $players = array(); 
                  for($i = 1; $i <= $num_players; $i++) {
                    $players[$i] = dealCards($deck, $num_cards_to_give_each_player);    
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
