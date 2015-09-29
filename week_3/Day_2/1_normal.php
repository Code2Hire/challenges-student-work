<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             *
             Use two foreach loop to create a master array of all 52 cards in the array $deck, 
             each represented as a key value pair in the format 'face of suit',
             use the print_r function to print out the contents of the $deck to make sure it is correct
             eg: "King of spades" should be one of the elements of the array and it should have a value of 13
             
             */

            $suits = array ("clubs", "diamonds", "hearts", "spades"); // create deck suits
            // creates the deck faces
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
            $deck = array(); // creates a container for a completed and merged deck.
            

            foreach($suits as $decksuit){                // suits as decksuit to add to $face
                foreach($faces as $face => $value) {     // $face as face=value
                    $deck["$face of $decksuit"] = $value;
                }
            }


            var_dump($deck);

        ?>

    </p>

    </body>
</html>
