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

        // Add a couple extra names to the $names array
        array_push($names, 'Bob ArK '); 
        array_push($names, ' Derek WaLL');

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        
        // Multiply the position of the letter 'a' (case insensitive) in the name by the
        // length of the last name divided by the number of words in the string
        
        // this function is going to find the total score of each name inside the
        // $names array using a closure
            $score = function (&$name) {
                // cleans up the names given, trim, all lower case, first letter capitalized
                $name = ucwords(strtolower(trim($name)));
                // finds the position of 'a' in the string
                $posA = stripos($name, 'a');
                // explodes the name into an array seperated by a space
                $parts = explode(' ', $name);
                // adds $parts in the end of the array
                $last = array_pop($parts);
                // finds the total lenght of the $last variable
                $lenLast = strlen($last);
                // counts the total number of words in the name
                $numWords =  str_word_count($name);
                // math to determine the score
                $score = $posA * $lenLast / $numWords;
                // returns any names with a score greater than 5
                return $score > 5;
            };
            
            // filters the name with the use of the callback
            $passedNames = array_filter($names, $score);
             
            // Without writing a loop, print out the winners separated by a comma and a space
            print implode(', ', $passedNames);
            
            // HUZZAH
        ?>

    </p>

    </body>
</html>