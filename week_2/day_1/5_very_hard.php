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
    
    $erics = 0; 
    $marks = 0;
    $counter=0;
    $draw = array('Rock', 'Paper', 'Scissors'); 
    echo "Best of 4 games wins, Goodluck!";
    echo "<br/>";
    echo "<br/>";
    while($erics < 4 && $marks < 4){ 
        
        $markRoll=$draw[rand(0,2)]; 
        $ericRoll=$draw[rand(0,2)];
        $counter ++;
        if($ericRoll == $markRoll) { 
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Tie Game!";
            echo "<br />";
            echo "<br />";
        }
        if($ericRoll=='Rock' &&  $markRoll=='Scissors'){
            $erics++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Eric Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
        elseif($ericRoll=='Rock' &&  $markRoll=='Paper'){
            $marks++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Mark Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
        elseif($ericRoll=='Scissors' &&  $markRoll=='Rock'){
            $marks++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Mark Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
        elseif($ericRoll=='Scissors' &&  $markRoll=='Paper'){
            $erics++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Eric Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
        elseif($ericRoll=='Paper' &&  $markRoll=='Rock'){
            $erics++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Eric Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
        elseif($ericRoll=='Paper' &&  $markRoll=='Scissors'){
            $marks++;
            echo "Game $counter: ";
            echo "<br/>";
            echo "Eric - $ericRoll";
            echo "<br/>";
            echo "Mark - $markRoll";
            echo "<br/>";
            echo "Mark Wins!";
            echo "<br />";
            echo "Mark = $marks, Eric = $erics";
            echo "<br/>";
            echo "<br />";
        }
   
    }   
    ?>
    </p>
    </body>
</html>