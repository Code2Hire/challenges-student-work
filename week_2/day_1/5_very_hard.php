<!-- 
	Using everything you have learned and some googling

    Let's play paper rock scissors

    Simulate 2 people playing the best of 7 (gotta win 4)
        - show the results of each "game"

        i.e.

        Game 1:
        Mark - Paper
        Eric - Rock
        Mark Wins [Mark = 1, Eric = 0]

        Game 2:
        Mark - Rock
        Eric - Scissors
        Mark Wins [Mark = 2, Eric = 0]

        etc .....

 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>

    <?php
    
    $Ericscore = 0; // initialize scores to 0
    $Markscore = 0;
    
    $options = array('Rock', 'Paper', 'Scissors'); //create an array of possible selections

   
    while($Ericscore < 4 && $Markscore < 4){ // while loop runs as long as score for either is not 4

        
        $Markroll=$options[rand(0,2)]; //sets roll to a random integer from 0 to 2(3 numbers)
        $Ericroll=$options[rand(0,2)];

        
        if($Ericroll == $Markroll) { //sets conditions and what will happen in case of a tie
            
            echo "Eric Rolled $Ericroll<br />";
            echo "Mark Rolled $Markroll<br />";
            echo "Tie Game!<br />";
            echo "<br />";
            
            continue; //continue ends current game and allows code to continue
        }

        
        if($Ericroll == "Rock"){ //ifelse statements write out possible outcomes only have to run games from eric's point of view to shorten amount of code
            
            if($Markroll == "Paper") { // Mark wins if Paper and his score goes up 1, else Eric score goes up
                $Markscore++;
            } else {
                $Ericscore++;
            }
        }
        elseif($Ericroll == "Paper"){
            
            if($Markroll == "Scissors") { // Mark wins if Scissors
                $Markscore++;
            } else {
                $Ericscore++;
            }
        }
        elseif($Ericroll == "Scissors"){
            
            if($Markroll == "Rock") { // Mark wins if Rock
                $Markscore++;
            } else {
                $Ericscore++;
            }
        }

       
        echo "Eric Rolled $Ericroll<br />"; //shows results
        echo "Mark Rolled $Markroll<br />";
        echo "Eric's score = $Ericscore<br />";
        echo "Mark's score = $Markscore<br />";
        echo "<br />";

    }

    ?>
</p>
</body>
</html>