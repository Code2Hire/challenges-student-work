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
    $function = function($string, callable $callback) { //turns the function into a closure
        // Use the string cleaning procedure we came up with in exercise 1 on $string
        
        // return the result of the $callback function with $string passed in as a parameter
        $strings = ucwords(strtolower(trim($string)));  //function to clean the string
        echo $strings;
        echo "<br/>";
        return $callback($strings);                     //returns $string after being passed thru whatever fucntion is specified in the calling of the function
        
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
            // MD5 is a hashing algorithm that is commonly used to store passwords
            echo $function(' jAsOn hUnTeR', 'md5');
            
        ?>
    </p>
    <p>
        <?php
            // Write your own using clean_then_call and a closure to manipulate the string further
            echo $function('NAthan ArrEoLa ','strlen');
        ?>
    </p>
  </body>
</html>