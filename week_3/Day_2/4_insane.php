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
            $ptotal = 0;

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
            function countCards(&$deck){
                $countCardsArray = replaceValue($deck);
                $talley = array_sum($countCardsArray);
                
                //var_dump($countCardsArray);
                //echo $talley . "</br>";
                
                return $talley;
            }
            
            //as if the dealer is a god and no mortal can ever beat him
            function dealerCountCards(&$deck){
                $countDealerArray = replaceValue($deck);
                $talley = array_sum($countDealerArray);
                
                //var_dump($countDealerArray);
                //echo $talley . "</br>";
                
                return $talley;
                
            }
            
            //gives all the cards to the players
            function assignCards($type, &$deck){
                $playersCardsArray=[];
                $dealersCardsArray=[];
                
                if($type == 'player'){
                    $playersCardsArray[] = array_shift($deck);
                    $playersCardsArray[] = array_shift($deck);
                    
                    //var_dump($playersCardsArray);
                    //exit;
                    
                    foreach($playersCardsArray as $c){
                        foreach($playersCardsArray as $key => $card){
                            if($card == 1 && array_sum($playersCardsArray) - 1 <= 10){
                                $playersCardsArray[$key] = 11; 
                            }
                        }
                        $talley = countCards($deck);
                        //echo $talley . "<br>";
                        if(array_sum($playersCardsArray) <= 16 && $talley > 0 || array_sum($playersCardsArray) <= 12){
                            $playersCardsArray[] = array_shift($deck);
                        }
                    }
                        
                    return array_sum($playersCardsArray);
                    //var_dump($deck);
                    //echo array_sum($playersCardsArray);
                    //var_dump($playersCardsArray);
                    
                }
                if($type == 'dealer'){
                    $dealersCardsArray[] = array_shift($deck);
                    $dealersCardsArray[] = array_shift($deck);
                    
                    //var_dump($playersCardsArray);
                    //exit;
                    foreach($dealersCardsArray as $d){
                        foreach($dealersCardsArray as $key => $card){
                            if($card == 1 && array_sum($dealersCardsArray) - 1 <= 10){
                                $dealersCardsArray[$key] = 11; 
                            }
                        }
                        if(array_sum($dealersCardsArray) <= 17){
                            $dealersCardsArray[] = array_shift($deck);
                        }
                    }
                    return array_sum($dealersCardsArray);

                    //var_dump($deck);
                    //echo array_sum($dealersCardsArray);
                    //var_dump($dealersCardsArray);
                }
            }

            
            //blackjack yo
            while(count($deck) > 4 && $pmoney > 0){
                $ptotal = assignCards('player', $deck);
                $dtotal = assignCards('dealer', $deck);
                //echo $ptotal . "<br>";
                //echo $dtotal . "<br>";
               
                $round++;
                
               
                //echo 'c-before' . count($deck);
                
                //determining who wins by points and such
                if($ptotal == $dtotal || $ptotal > 21 && $dtotal > 21){
                    $roundwinner = "No One";
                }
                if($ptotal == 21 && $dtotal == 21){
                    $roundwinner = "Natural";
                }
                elseif($ptotal > $dtotal){
                    $pmoney -= $bet;
                    
                    if($ptotal > 21){
                        $roundwinner = "Dealer";
                    }
                    else{
                        if($ptotal == 21){
                            $blackjack++;
                        }
                        $pmoney += $winround;
                        $roundwinner = "Player";
                    }
                }   
                elseif($dtotal > $ptotal){
                    $pmoney -= $bet;
                    
                    if($dtotal > 21){
                        $pmoney += $winround;
                        $roundwinner = "Player";
                    }
                    else{
                        $roundwinner = "Dealer";
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
