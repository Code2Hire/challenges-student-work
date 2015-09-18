<!DOCTYPE html>
<html>
    <head>
        <script>
            window.onload = function(){
                document.getElementById("myInput").focus();
            }
        </script>
    </head>
    <body>
    <p>
        <h4>Please enter an amount you would like your player to start with</h4>
        <form  method="post" action="">
        <input type="number" name="value" id="myInput">
        <input type="submit">
        </br>
        </br>
        </form>
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
              
                foreach($suits as $suit){
                    foreach($faces as $value=>$face){
                        $newKey = "$value of $suit";
                        $deck[$newKey] = $face;
                        
                    }
                }
                
                return $deck;
                    
            }
            
            //echo $_POST['value'];
            $deck = createDeck($deck);
            
            function rearrange($array){
                shuffle($array);
                return $array;
            }
            
            $deck = rearrange($deck);
            // v Checking stuff
            //var_dump($deck);
            
            //cards totals and money and sorts
            $pcard1 = 0;
            $pcard2 = 0;
            $pcard3 = 0;
            $pcard4 = 0;
            $ptotal = 0;
            
            $dcard1 = 0;
            $dcard2 = 0;
            $dcard3 = 0;
            $dcard4 = 0;
            $dtotal = 0;
            
            $pmoney = $_POST['value'];
            $original = $pmoney;
            $winround = $original;
            $bet = $original/2;
            
            $round = 0;
            $blackjack = 0;
            
            //replaces values in array for the probability to count cards            
            function replaceValue($array){
                for($i=0;$i<count($array);$i++) {
                    if($array[$i] == 1) {
                        $array[$i] = -1;
                    }
                    if($array[$i] == 2) {
                        $array[$i] = 1;
                    }
                    if($array[$i] == 3) {
                        $array[$i] = 1;
                    }
                    if($array[$i] == 4) {
                        $array[$i] = 1;
                    }
                    if($array[$i] == 5) {
                        $array[$i] = 1;
                    }
                    if($array[$i] == 6) {
                        $array[$i] = 1;
                    }
                    if($array[$i] == 7) {
                        $array[$i] = 0;
                    }
                    if($array[$i] == 8) {
                        $array[$i] = 0;
                    }
                    if($array[$i] == 9) {
                        $array[$i] = 0;
                    }
                    if($array[$i] == 10) {
                        $array[$i] = -1;
                    }
                }
                return $array;
            }
            //like that movie 21 or rain man or almost every gambling movie that is centered arround a genius
            function countCards($card, $deck){
                $countCardsArray = replaceValue($deck);
                $talley = array_sum($countCardsArray);
                
                //var_dump($countCardsArray);
                //echo $talley . "</br>";
                
                if($talley > 0){
                    return $card;
                }
                
            }
            
            //as if the dealer is a god and no mortal can ever beat him
            function dealerCountCards($card, $deck){
                $countDealerArray = replaceValue($deck);
                $talley = array_sum($countDealerArray);
                
                //var_dump($countDealerArray);
                //echo $talley . "</br>";
                
                if($talley > 0){
                    return $card;
                }
                
            }
            
            //removes # cards from deck
            function remove($deck, $number){
                $newDeck = $deck;
                
                for($j = 0; $j < $number; $j++){
                    array_shift($newDeck);
                }
               
                return $newDeck;
               
            }
            
            
            //blackjack yo
            while(count($deck) > 4 && $pmoney > 0){
                $pcard1 = $deck[0];
                $dcard1 = $deck[1];
                $pcard2 = $deck[2];
                $dcard2 = $deck[3];
                $pcard3 = 0;
                $dcard3 = 0;
                $pcard4 = 0;
                $dcard4 = 0;
                
                // v Just checking stuff 
                // $pcard3 = $deck[4];
                // $pcard4 = $deck[5];
               
                $round++;
                
                 //determines whether to change an ace
                if($pcard1 == 1 && $pcard2 <= 10){
                  $pcard1 == 11; 
                }
                elseif($pcard2 == 1 && $pcard1 <= 10){
                    $pcard2 == 11;
                }
                if($dcard1 == 1 && $dcard2 <= 10){
                  $dcard1 == 11; 
                }
                elseif($dcard2 == 1 && $dcard1 <= 10){
                    $dcard2 == 11;
                }
                // v Still checking stuff
                //echo "$pcard1 $pcard2 ... $dcard1 $dcard2 <br/>";
                
                //the hits of the dealer and player 
                if($pcard1 + $pcard2 < 16){
                    if($round !== 1){
                        $pcard3 = countCards($deck[4], $deck);
                    }
                    else{
                        $pcard3 = $deck[4];
                    }
                }
                
                if($pcard3 !== 0 && $pcard1 + $pcard2 + $pcard3 < 16){
                    $pcard4 = countCards($deck[5], $deck);
                }
                //echo "$pcard1     $pcard2     $pcard3   $pcard4 <br/>"; 
                
                //$ptotal = $pcard1 + $pcard2 + $pcard3 + $pcard4;
                //if($ptotal <= $dcard1 + $dcard2 && $ptotal < 22){
                  //  $pcard3 = $deck[4];
                //}
                
                
 
                if($pcard3 == 0){
                    if($dcard1 + $dcard2 < 17){
                        $dcard3 = $deck[4];
                        if($dcard1 + $dcard2 + $dcard3 < 17){
                            $dcard4 = $deck[5];
                        }
                    }
                }
                if($pcard3 !== 0 && $pcard4 == 0) {
                    if($dcard1 + $dcard2 < 17){
                        $dcard3 = $deck[5];
                        if($dcard1 + $dcard2 + $dcard3 < 17){
                            $dcard4 = $deck[6];
                        }
                    }
                }
                if($pcard4 !== 0) {
                    if($dcard1 + $dcard2 < 17){
                        $dcard3 = $deck[6];
                        if($dcard1 + $dcard2 + $dcard3 < 17){
                            $dcard4 = $deck[7];
                        }
                    }
                }
                //var_dump($deck);
                //echo "$dcard1     $dcard2     $dcard3    $dcard4<br/>";
                
                //figure it out
                $ptotal = $pcard1 + $pcard2 + $pcard3 + $pcard4;
                $dtotal = $dcard1 + $dcard2 + $dcard3 + $dcard4;
                
                //echo 'c-before' . count($deck);
                //determining who wins by points and such
                    if($ptotal == $dtotal || $ptotal > 21 && $dtotal > 21){
                        $roundwinner = "No One";
                        $deck = rearrange($deck);
                    }
                    if($ptotal == 21 && $dtotal == 21){
                        $roundwinner = "Natural";
                        $deck = rearrange($deck);
                    }
                    elseif($ptotal > $dtotal){
                        $pmoney -= $bet;
                        if($ptotal > 21){
                            $roundwinner = "Dealer";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($pcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                            if($dcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard4 !== 0){
                                    $deck = remove($deck, 1);
                                    }
                                }
                            }
                        else{
                            if($ptotal = 21){
                                $blackjack++;
                            }
                            $pmoney += $winround;
                            $roundwinner = "Player";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($pcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                            if($dcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                        }
                    }   
                    elseif($dtotal > $ptotal){
                        $pmoney -= $bet;
                        if($dtotal > 21){
                            $pmoney += $winround;
                            $roundwinner = "Player";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($pcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                            if($dcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                        }
                        else{
                            $roundwinner = "Dealer";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($pcard4 !== 0){
                                        $deck = remove($deck, 1);
                                }
                            }
                            if($dcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard4 !== 0){
                                    $deck = remove($deck, 1);
                                }
                            }
                        }
                    }
                        
               // echo 'c-after' . count($deck);
            
                
                // v Still Just checking stuff
                //echo $ptotal . "<br/>";
                //echo $dtotal . "<br/>";
                
                //script of what to print after each game
                if($roundwinner !== "Natural"){
                    echo "
                    Round: $round <br/>
                    Round Winner: $roundwinner <br/>
                    Players Money: $$pmoney <br/><br/>
                    ";
                }
                else {
                    echo "
                    Round: $round <br/>
                    This round is a $roundwinner<br/>
                    Players Money: $$pmoney <br/><br/>
                    ";
                }
                
                // v Just checking stuff again
                //echo "Count" . count($deck) . "<br/>";
                if($pmoney == $original/2){
                    $halfway = true;
                    $amount = $round;
                }
                
                //script of what to print when a winner is found
                if(count($deck) <= 4 && $pmoney > 0 ){
                    if($halfway == true){
                      echo "The player hit half of what he started with in round: $amount <br/>";  
                    }
                    if($blackjack !== 0){
                        if($blackjack == 1){
                            echo "The player hit blackjack $blackjack time <br/>";
                        }
                        else{
                            echo "The player hit blackjack $blackjack times <br/>";
                        }
                    }
                    echo "Winner of the Game: Player! with $$pmoney";
                }
                elseif($pmoney == 0){
                    echo "Winner of the Game: Dealer! It took $round rounds to beat the player.";
                }
                
            }
            
            
            
            
        ?>

    </p>

    </body>
</html>
