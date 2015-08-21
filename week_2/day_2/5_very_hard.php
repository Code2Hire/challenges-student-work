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
        array_push($names, 'bOb ARK');
        array_push($names, 'DeReK wall');

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
            function score(&$name) {
            $name = trim(ucwords(strtolower($name)));
            $posA = stripos($name, 'a');
            $parts = explode(' ', $name);
            $last = $parts[count($parts)-1];
            $lenLast = strlen($last);
            $numWords = str_word_count($name);
            $score = $posA * $lenLast / $numWords;
            return $score;
            
            //or if($score > 5) {
                //return true;
            //}
        };
        
        $passedNames = array_filter($names, function($name) {
            
            return score($name) > 5;
            
        });

        // Without writing a loop, print out the winners separated by a comma and a space
        print implode(', ', $passedNames);
        
        usort($passedNames, function($a, $b) {
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