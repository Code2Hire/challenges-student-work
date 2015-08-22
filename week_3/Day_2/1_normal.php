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

            $suits = array ("clubs", "diamonds", "hearts", "spades"); //sets an array of suits
            $faces = array ( //sets an associative array of specific cards
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13 
            );
            $deck = array(); //creates an array for a $deck

            foreach($suits as $suit) { //individualizes each suit
                
                $suitcards = array(); //names an array as a suit
                
                foreach($faces as $key => $face) { //sets properties of each card
                    $suitcards[$key . ' of ' . $suit] = $face;
                }
                
                $deck[$suit] = $suitcards; //puts each suit array in deck array
                
            }
            // print here
            var_dump($deck);

            

        ?>

    </body>
</html>
