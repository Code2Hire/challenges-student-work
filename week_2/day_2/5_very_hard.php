<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

       <?php

        /**
         * Copy exercise 5 into this file.
         *
         * Use a custom sort function and closure to sort the names
         * by their scores, with the highest scores first before
         * printing the names out on the screen.
         *
         * @see http://php.net/manual/en/function.usort.php
         */
         
        
        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];
        //add names
        array_push($names, 'bOb ARK'); //array_push adds new names to $names array
        array_push($names, 'DeReK wall');

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
            function score(&$name) { //pass by reference, '&' changes 'original copy' of array
            $name = trim(ucwords(strtolower($name))); //nesting, start by calling $name, then lowercase all letters, then uppercase first letter of each string then trim extra space off each side
            $posA = stripos($name, 'a'); //stripos return position of the substring we are looking for
            $parts = explode(' ', $name); //explodes each name string into an array, exploded by a space
            $last = $parts[count($parts)-1]; //sets $last to the last name by calling the '1' position in the $parts array
            $lenLast = strlen($last); //gets the length of the last name string
            $numWords = str_word_count($name); //str_word_count counts number of words in $name string (2)
            $score = $posA * $lenLast / $numWords; //sets $score to an equation using previously stated variables
            return $score;
            
            //or if($score > 5) {
                //return true;
            //}
        };
        
        $passedNames = array_filter($names, function($name) { // uses closure to call custom function score on a $name
            
            return score($name) > 5;
            
        });

        // Without writing a loop, print out the winners separated by a comma and a space
        print implode(', ', $passedNames);
        
        usort($passedNames, function($a, $b) { //uses usort to sort names by their score
            $a = score($a);
            $b = score($b);
            if($a == $b) {
                return 0;
            }
            return ($a > $b) ? -1 : 1;
        });
        ?>
    </p>

    </body>
</html>