<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             *
              Lets bring in the deck code from the past example. (normal)
              create a function that will create a deck of cards, randomize it and then return the deck
             */
             function createDeck() {
                    $suits = array ("Clubs", "Diamonds", "Hearts", "Spades");
                    $faces = array (
                         "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                         "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
                $deck = array();

            // print here
           foreach ($suits as $suit) {
            foreach ($faces as $face => $value) {
                    $deck[] = array ("face"=>$face, "suit"=>$suit,"value"=> $value);
    }
}
       $shuffled_deck = shuffle($deck);
        $card = array_shift($deck);

        
              }
                
              

            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
           
            function dealCards(&$deck, $number_of_cards) {
              createDeck();
              for($i = 0; $i < $number_of_cards; $i++){
                  $randsuit = rand(0,3);
                    $randcard = rand(0,12); 
                         if( isset($setCards[$suit[$randsuit].$card[$randcard]]) ) {
                                 $i--;
                                continue;
              }
               
                return $number_of_cards;
                
            }
            }
        
          $player = dealCards($deck,4);
          echo $player;
          
                
        ?>

    </p>

    </body>
</html>
