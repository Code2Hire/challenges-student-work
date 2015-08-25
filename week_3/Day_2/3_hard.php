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
              $num_players = 4;
              $num_cards_in_deck = count(createDeck());//find a function to count the # of elements in an array
              $num_cards_to_give_each_player = $num_cards_in_deck / $num_players;
                    
                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                  $players = array(); 
                  for($i=1; $i<=$num_players; $i++) {
                      $playercards = dealCards($deck, $num_cards_to_give_each_player);
                    $players[$i] = $playercards;                
                                     
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
                 $round_winners = array();
                 
                 $counter =1;    
                  while ($counter <= $num_cards_to_give_each_player){
                      
                    $values = array();
                    
                    for ($i=1; $i<=4;$i++){    
                        $hand1 = $players[$i];  
                        $randomkey = array_rand($hand1, 1);
                        $value = $hand1[$randomkey];   
                        $values[ "Player " . $i] = $value;
                    }  
                    
                    
                    if(count(array_unique($values)) < count($values)) {
                        $round_winners[] = 'DRAW';    
                    }else {
                        
                      $maxValue = max($values);
                      $player = array_search($maxValue, $values);
                      $round_winners[] = $player;
                      
                    }
                    
                    $counter++;
                }    
                
                var_dump($round_winners);
                        
                  

        ?>

    </p>

    </body>
</html>
