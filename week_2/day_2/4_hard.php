<?php
    /**
     * This function cleans a string, then calls a function with
     * the string as a parameter.
     *
     * See that strange keyword in front of $callback?  This is called a "type hint".
     * It means that whatever is passed in as that parameter must be a function.
     *
     * Can you implement this function?
     */
     //function that cleans a string
    function clean_then_call($string, callable $callback) {
        // Use the string cleaning procedure we came up with in exercise 1 on $string
        
        // return the result of the $callback function with $string passed in as a parameter
        
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
            // MD5 is a hashing algorithm that is commonly used to store passwords
            //printing the first string encrypted
            echo clean_then_call(' jAsOn hUnTeR', 'md5');
        ?>
    </p>
    <p>
        <?php
            //array of names
            $words = array('ChRis Carter', 'John Stamos', 'John Carter', 'John Mayer', 'John Oliver');
            //randomly picking a number with the amount of strings in an integer
            $amount = rand(0,count($words)-1);
            //picks a string from the array randomly
            $selection = $words[$amount];
            
            // Write your own using clean_then_call and a closure to manipulate the string further
            echo '</br>';
            //cleaning a random name
            echo clean_then_call($selection, function($name){
                //tidying up each name first
                $name = strtoupper(strrev($name));
               //the encryption
                $name = str_replace(array('A','B','C'),array('#g2v','*(med','98p43d@'), $name);
                return $name;
            });
        ?>
    </p>
  </body>
</html>