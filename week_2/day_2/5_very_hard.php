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
            'eRic Schwartz',
            'mark zuckerburg'
            ];
            
            
        //Add a couple names to the $names array
        array_push($names, 'Bob ArK');
        array_push($names, 'Derek WaLL');
        
        //Without writing a loop, use an array function to filter our list
        //of names down to only those who pass our name test.
        $passedNames = array_filter($names, function (&$name){
        $name = ucwords(trim(strtolower($name)));
        
        $posA = stripos($name, 'a');
        $parts = explode(' ',$name);
        $lasName = array_pop($parts);
        $lenLast = strlen($lasName);
        $numWords = str_word_count($name);
        $score = $posA * $lenLast / $numWords;
        
        return ($score > 5);    
        });
            
        //Without writing a loop, print out the winners seperated by a comma and a space
        
        
        print implode(', ',$passedNames);
        
            
        ?>

    </p>

    </body>
</html>