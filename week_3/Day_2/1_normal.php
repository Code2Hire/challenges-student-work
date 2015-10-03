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
            // creates a main suits array with the 4 suits
            $suits = array ("clubs", "diamonds", "hearts", "spades");
            // creates a faces array which assign each face a corresponding key
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            // creates an emtpy desk array for later use
            $deck = array();
            
            // loops through each of the 4 suits
            foreach($suits as $suit) { 
                // creates another new array for the suit of the cards
                $suitCards = array(); 
                    // loops through the faces array for the keys that match a 
                    // a certain face
                    foreach($faces as $key => $face) { 
                        // this is what will display
                        $suitCards[$key . " of " . $suit] = $face; 
                    } 
                // pushes all of this new info to the original deck array
                array_push($deck, $suitCards);
            } 


            // prints this shit
            var_dump($deck);


            

        ?>

    </p>

    </body>
</html>
