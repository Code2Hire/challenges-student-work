<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Some functions in PHP take a parameter called a "callback".
         * A callback is a function that will be run somehow inside the
         * function that is calling it.hh
         * @see http://php.net/manual/en/function.array-filter.php
         */

        // Modify the function in our previous example to return "true" if
        // the score is greater than 5, and "false" if it is not.
        
           /**
         * Copy exercise 5 into this file.
         *
         * Use a custom sort function and closure to sort the names
         * by their scores, with the highest scores first before
         * printing the names out on the screen.
         *
         * @see http://php.net/manual/en/function.usort.php
         */
 
        $function = function(&$name){
            $name = ucwords(strtolower(trim($name)));
            // Multiply the position of the letter 'a' (case insensitive) in the name by the
            // length of the last name divided by the number of words in the string
            $posA=stripos($name,"a");//my character pos function
            $parts= explode(' ', $name);
            $last = array_pop($parts);
            $lenLast= strlen($last);//My last name lenght
            $numWords=str_word_count($name);//My number of words in string
            $score = $posA * $lenLast / $numWords;
            
            return ($score > 5);

        }
        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names,'Bob Ark');
        array_push($names,'Derek Wall');
        

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $passedNames = array_filter($names,$function);

        // Without writing a loop, print out the winners separated by a comma and a space
        echo implode(', ', $passedNames);

        // Question: Do the names look right?t

        ?>

    </p>

    </body>
</html>