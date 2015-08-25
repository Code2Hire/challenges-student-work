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
            
            function dealCards(&$deck, $number_of_cards = 0) {
                
                $playercards = array();
                
                for($i = 1; $i <= $number_of_cards; $i++) {
                    
                    $randsuit = rand(0, count($deck) - 1);
                
                    $suits = array_keys($deck);
                
                    $suit = $suits[$randsuit];
                
                    $card = array_rand($deck[$suit], 1);
                
                    array_push($playercards, $card);
                    
                    unset($deck[$suit][$card]);
                    
                    if (count($deck[$suit]) === 0) {
                        unset($deck[$suit]);
                    }
                    
                }
                
                return $playercards;
                
            }
            
            $deck = createDeck();
            
            function countCards($deck) { //while count recursive will count the total amount of ALL elements in deck array, including suits, I subtract the amount of suits from the total
                $count = count($deck, COUNT_RECURSIVE) - count($deck);
                return $count;
            }

            /*
             * Bring in your createDeck and dealCards function
               For the specified number of players below, assign each one an even set of cards.
               We will do this by counting out how many players there are, counting how many cards
               are in the deck. then dividing them so we know how many cards each player should get
             */

               $num_players = 4; //already in code from the start
               $num_cards_in_deck = countCards($deck);
               //echo $num_cards_in_deck; //proves my countCards function works
               $num_cards_to_give_each_player = $num_cards_in_deck / $num_players;
               //echo $num_cards_to_give_each_player; //proves my equation to determine the amount of cards to deal works
                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                  $players = array(); 
                  
                  for($i = 1; $i <= $num_players; $i++) {
                      
                    $players[$i] = dealCards($deck, $num_cards_to_give_each_player); 
                    
                  }
                  
                //var_dump($players);
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

              //$round_winners = array();
              
              function playGame($players) {
                  
                  $playedCards = array();
                  
                  foreach($players as $player) {
                      
                      $card = rand(0, count($player) - 1);
                      
                      $playedCard = $player[$card];
                      
                      if(count($player) === 0) {
                          unset($player);
                          unset($players);
                          echo 'GAME OVER';
                      }
                      
                      array_push($playedCards, $playedCard);
                      
                  }
                  
                  return $playedCards;
                  
              }
            
              var_dump(playGame($players));
              
        ?>

    </p>

    </body>
</html>
