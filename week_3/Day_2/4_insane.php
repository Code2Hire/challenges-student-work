<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /* 
              Using your advanced knowledge of cards and arrays, Create a game of Blackjack
              Rules:
             	at any given time there will only be 2 players. the dealer and player one.
             	4 cards will be dealt out each round, 2 to the dealer and 2 to the player
             	if the amount in the players hand is less than or equal to the amount in the dealer hand
             		you must get a hit (draw a card)
             	if a player hits and the amount he has goes over 21, he has BUSTED and the dealer won that round
             	if the player ever reaches an amount greater than the dealers he should stay; then it will be 
             	    the dealers turn.
             	The dealer must draw until he reaches an amount greater than the player or until he has BUST
             	Subtract $100 from the players bank every time they lose
             	Add $200 to the players bank every time they win
             	Player starts with $1000 in the bank account
             	Aces can either be an 11 or 1
             	
             	the game will continue as long as there are enough cards in the deck OR the player runs out of money

             	Output:
		         	How many games were played?
		         	Who won the game?
		         	Which round did the player's bank reach half way?
		         	How many times did the player get blackjack ?

             	Extra Credit && Prize =]

             		Create a function called countCards and enable it for the player NOT the dealer
             		This function must analyze the deck and determine if the player should draw again
             		even if the amount in his hand is greater than the dealer.
             		This would be very useful lets say if the dealer has a sum of 9 on the table
             		You might have two 6's (amount of 12). Should you hit again? 
             		More than likely, because chance is the dealer can beat your 12

             	Winner will be determined by whoever has successfully implemented this AND has the best logic
            */
            function createDeck() {

                $suits = array ("clubs", "diamonds", "hearts", "spades");
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 10, "Queen" => 10, "King" => 10
                );
            
                $deck = array();
                foreach($suits as $suit) {
                    foreach($faces as $key=>$face) {
                            $deck[] = $face;
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
        
            $players_bank = 1000;
            $deck = createDeck();
        
            while($players_bank >= 0) {
            
            $player_start_cards = dealCards($deck, 2);
                        $playerCards = array_values($player_start_cards);

            foreach($player_start_cards as $key=>$unsetCards) {
                unset($player_start_cards[$key]);
            }
            

            echo "Players Card :" . "<br />";
            var_dump($playerCards);
            
             if($player_start_cards[0] == 1 || $player_start_cards[1] == 1) {
                 
                if($player_start_cards[0] == 10 || $player_start_cards[1] == 10) {
                    $players_bank = $players_bank + 200;
                   
                    echo "Players Card ( 21 ) :" . "<br />";
                    echo $player_start_cards[0] . "<br />";
                    echo $player_start_cards[1] . "<br />";
                    echo "Players Bank ( 21 money ) :" . "<br />";
                    echo $players_bank . "<br />";
                    continue;
                }else {
                        $coin = rand(1,10);
                        if($coin <= 5) {
                           $player_start_cards[0] = 11;
                        }else {
                        $player_start_cards[0] = 1;
                        }
                }
            }else {
        
                $player_sum = $player_start_cards[0] + $player_start_cards[1];
                echo "Players Sum ( not 21 ) :" . "<br />";
                echo $player_sum . "<br />";
            
            }
          
            $dealer_start_cards = dealCards($deck, 2);
            if($dealer_start_cards[0] == 1 || $dealer_start_cards[1] == 1) {
                if($dealer_start_cards[0] == 10 || $dealer_start_cards[1] == 10) {
                    
                    echo "Players Bank ( with dealers bank  21) :" . "<br />";
                    $players_bank = $players_bank - 100;
                
                    echo "Dealers Cards ( 21 ):" . "<br />";
                    echo $dealer_start_cards[0] . "<br />";
                    echo $dealer_start_cards[1] . "<br />";
                    echo $players_bank . "<br />";
                    continue;
        
                }else {
                    $coin = rand(1,10);
                    if($coin <= 5) {
                        $dealer_start_cards[0] = 11;
                    }else {
                        $dealer_start_cards[1] = 1;
                    }
                }
            }else {
                $dealer_sum = $dealer_start_cards[0] + $dealer_start_cards[1];
                echo "Dealers Card sum ( not 21 ) :" . "<br />";
                echo $dealer_sum . "<br />";
            }
            die;
            
            if($player_sum == $dealer_sum || $player_sum < $dealer_sum) {
                
                // for($i = $player_sum; $)
                
                  $player_card = dealCards($deck, 1);
                  if($player_card[0] == 1) {
                    if($player_sum == 10) {
                       $players_bank = $players_bank + 200;
                    }else {
                        //choose random number of 1 or 11
                     }
                  }else {
                      
                  $player_sum = $player_card[0] + $player_sum;
                    if($player_sum > 21) {
                       $player_sum = $player_sum - 100;
                    }
                    elseif($player_sum == 21) {
                           $players_bank = $players_bank + 200;
                    
                    }
                }
            }

        }
       
        ?>

    </p>

    </body>
</html>
