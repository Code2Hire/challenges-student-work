<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
        
        
        //////////////////////////////////////
        //INCOMPLETE
        //////////////////////////////////////
            /*
             * Bring in your createDeck and dealCards function
               For the specified number of players below, assign each one an even set of cards.
               We will do this by counting out how many players there are, counting how many cards
               are in the deck. then dividing them so we know how many cards each player should get
             */

               $deck = 0;
               $num_players = 4;
               $num_cards_in_deck = //find a function to count the # of elements in an array
               $num_cards_to_give_each_player = 5;

                /*
                  use a for loop to add the "dealt hands" to the $players array
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

              $round_winners = 0;

        ?>

    </p>

    </body>
</html>
