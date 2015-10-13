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
            
            // creating the deck
            function createDeck() {
                $suits = array ("clubs", "diamonds", "hearts", "spades");
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            
            $deck = array();
              
          
            foreach($suits as $suit){
                foreach($faces as $value=>$face){
                    $newKey = "$value of $suit";
                    $deck[$newKey] = $face;
                    
                }
            }
                return $deck;
                
            }
           //shuffle the duck
            function shuffle_assoc(&$array) {
                 $keys = array_keys($array);
                 shuffle($keys);
            
             foreach($keys as $key) {
                 $new[$key] = $array[$key];
            }
                 $array = $new;
                return true;
            }
      
            $deck = createDeck();
            shuffle_assoc($deck); 
        
              
            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
                
               $num_players = 4;
               $num_cards_in_deck = count($deck);
               $num_cards_to_give_each_player = $num_cards_in_deck / $num_players;
                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                
                //create array of players and their values, then set all values in array equal to the dealCards function
                 $players = array (
                        "Player 1" => 1,
                        "Player 2" => 2,
                        "Player 3" => 3,
                        "player 4" => 4);
               
           
            function dealCards($deck, $num_cards_to_give_each_player) {
                $players = array_chunk($deck, $num_cards_to_give_each_player);
                return($players);
            }
            
            //call dealCards on all players
            $players = dealCards($deck, $num_cards_to_give_each_player);
            
          
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
               //score set to 0
              $p1win = $p2win = $p3win = $p4win = 0;
              
               $rounds = 0;
              
                
                
                        // go through 12 rounds, deal a random card to each player, whoever has the highest value card wins as long as there are no duplicate cards/values
                  for($rounds = 1; $rounds <= 12; $rounds++){
                        $player_1_card = $players[0][$rounds];
                        $player_2_card = $players[1][$rounds];
                        $player_3_card = $players[2][$rounds];
                        $player_4_card = $players[3][$rounds];
                        
                    //use max function to find highest value card out of 4 players
                        $round_determine = max($player_1_card,$player_2_card,$player_3_card, $player_4_card);
                       
                        if($player_1_card == $player_2_card || $player_1_card == $player_3_card || $player_1_card == $player_4_card || $player_2_card == $player_3_card || $player_2_card == $player_4_card || $player_3_card == $player_4_card){
                            $won = "DRAW";
                            }
                        else{
                            if($round_determine == $player_1_card){
                                $won = "Player 1";
                                $p1win+=1;
                            
                            }
                            elseif($round_determine == $player_2_card){
                                $p2win += 1;
                                $won = "Player 2";
                               
                            }
                            elseif($round_determine == $player_3_card){
                                $p3win +=1;
                                $won = "Player 3";
                                
                            }
                            elseif($round_determine == $player_4_card){
                                
                                $p4win +=1;
                                $won = "Player 4";
                                 
                            }
                        }
                     
                        //scoreboard to show each players value and their wins
                        echo "<pre>
                            Game $rounds <br/>
                            Player 1: $player_1_card Wins: $p1win <br/>
                            Player 2: $player_2_card Wins: $p2win <br/>
                            Player 3: $player_3_card Wins: $p3win <br/>
                            Player 4: $player_4_card Wins: $p4win <br/>
                       </pre>";
                        if($won === "DRAW"){
                            echo "DRAW! <br/>";
                        }
                        else{
                            echo "$won  won this round! <br/>";
                        }
                  }
                 // find the highest value of who has won, whoever is highest is the winnner
                  $game_winner = max($p1win,$p2win,$p3win,$p4win);
                  var_dump($game_winner);
                if($game_winner == $p1win){
                            echo "Player 1 wins the game!";
                        }
                        elseif($game_winner == $p2win){
                            echo "Player 2 wins the game!";
                        }
                        elseif($game_winner == $p3win){
                            echo "Player 3 wins the game!";
                        }
                        elseif($game_winner == $p4win){
                            echo "Player 4 wins the game!";
                        }
              
                
                        
                       
                  
               
        ?>

    </p>

    </body>
</html>
