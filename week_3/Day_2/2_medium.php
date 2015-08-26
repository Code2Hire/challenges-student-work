<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
           <!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            
            $suits = array ("clubs", "diamonds", "hearts", "spades");
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            $deck = array();


            // print here
            // $deck = array()
            //      array() // clubs
            //      array() // diamonds
            //      array() // hearts
            //      array() // spades
            // );
            
            $deck = array();
            
            foreach($suits as $suit){
                $suitCards = array();
                
                //clubs
                foreach($faces as $key => $face){
                    $suitCards[$key . " of " . $suit] = $face;
                }
                $deck[$suit] = $suitCards;
            }

        var_dump($deck);
            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
           function dealCards(&$deck, $number_of_cards = 0) {
                
            $playerCards = array();
                
            for($i=1; $i<=$number_of_cards; $i++){
                $randomSuit = rand(0,3);
                $randomCard = rand(1,13);
                
                
                $suits = array_keys($deck);
                $suit = $suits[$randomSuit];
                
                $card = array_search($randomCard, $deck[$suit]);
                
                array_push($playerCards, $card);
                
                return $playerCards;
             }
           }
            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
        var_dump($player);
        ?>

    </p>

    </body>
</html>
