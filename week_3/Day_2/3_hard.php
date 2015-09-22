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
             
             function shuffle_assoc(&$array) {
                
                // assigns the array keys to keys
                $keys = array_keys($array);
                
                // switches the order of the keys
                shuffle($keys);
        
                // takes the key and matches it with its face
                foreach($keys as $key) {
                    $new[$key] = $array[$key];
                }
        
                $array = $new; // assigns the shuffled array to the original $  = array('' => );
        
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
              
              function dealCards(&$deck, $number_of_cards) {
                
                $cardToReturn = array_slice($deck, 0, $number_of_cards);
                foreach($cardToReturn as $cardface => $value){
                    unset($deck[$cardface]);
                    
                }
                return $cardToReturn; 
            }
            

             
              
              $deck = createDeck();
              $num_players = 4;
              $num_cards_in_deck = count($deck); //find a function to count the # of elements in an array
              $num_cards_to_give_each_player =  $num_cards_in_deck / $num_players;
                  
             
             
                
                
                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                
                 $players = array();
                 
                for($i = 0; $i < $num_players; $i++){ 
                 $players[$i] = dealCards($deck,$num_cards_to_give_each_player);
                }              
                
                
                
                
            $count = 0;    
            var_dump($players);
            foreach($players as $people){
              $count = $count + 1;
                foreach($people as $x => $key){
                echo " Player $count has $x ";
                echo "</br>";
                
                }
            }

                
            //   /*
            //   lets create a simple game
            //   each player will play a card and whoever has the highest value wins. if there are 2 cards played
            //   that have the same value everybody loses and that round is now a draw.

            //   store the results of each game in round_winners and also who won that round as the value.
            //   if the round is a draw store the value as DRAW

            //     use a loop to play each game until all oponents are out of cards

            //     Print out the array of all the rounds. if there was a draw the round should say DRAW
            //     if a player has one it should display "Player X" where X is the index of the player
                
            //   */

            // //   $round_winners = array();

        ?>

    </p>

    </body>
</html>
