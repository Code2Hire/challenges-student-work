<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
        
        
        

            
            
             $names = array(
                        'JASON hunter',
                        ' eRic Schwartz',
                        'mark zuckerburg '
                    );
            
            
              function score($name) {
                            
                            
                            // Ensure proper capitalization of the following names
                            // by looping through and modifying the $names array.
                            // Also remove any leading or trailing whitespace from the name.
                           
                        global $names;    
                        
                        $name = trim($name);
                        $name = strtolower($name);
                        $name  = ucwords($name);
                        
                        
            
                        // Pick a random name
                        $name = $names[rand(0,count($names)-1)];
                        
                
                        // Multiply the position of the letter 'a' (case insensitive) in the name by the
                        // length of the last name divided by the number of words in the string
                            $indexOfLetterAInName = strpos($name, 'a' );
                            $firstAndLastName = explode(' ', $name);
                            $last =  array_pop($firstAndLastName);
                            $wordnum = str_word_count($name);
                            $lastnamelength = strlen($last);
                           
                           
                           
                           $score = $indexOfLetterAInName * $lastnamelength / $wordnum;
                
                            // Print out the person's name and their "score"
                        
                        echo "$name has $score points." ;        
                                
                                
                                
                                
                            }
            
        
        
        
        
        
        
        
         
         
         
         


        ?>

    </p>

    </body>
</html>