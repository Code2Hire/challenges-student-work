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
          function score(&$name){
             
            $name = ucwords(strtolower(trim($name)));
            $parts = explode(" ", $name);
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
            $score =  strlen($lastname) * stripos($name,'a') / str_word_count($name);
        
        return $score;
        
        
         };
         
        // Add a couple extra names to the $names array
        array_push($names, "Derek Wall","Seth Handy", "Brian");

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $names = array_filter($names, function(&$name){
            $score = score($name); 
            return $score > 5;
        });
    
             
         usort($names,function($a,$b){
                 $score_a =  score($a);
                 $score_b =  score($b);
                 
                 if($score_a == $score_b){
                     return 0;
                     
                 }
                 if($score_a < $score_b){
                     return 1;
                 }
                 else {
                     return -1;
                 }
                 
             }
         );
         echo implode(",", $names);
        
            
        
        

        // Without writing a loop, print out the winners separated by a comma and a space
        function dd($arg) {
        die(var_dump($arg));
    }
        $passName = implode($names);
      
        // Question: Do the names look right?
        ?>

    </p>

    </body>
</html>