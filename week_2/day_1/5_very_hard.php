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


    // code goes here ...
   
    $Mark_Score = 0;
    $Eric_Score = 0;
    $winnr = false;
    // Do-While loop that loops until there is a winner
    do { 
        // loop that goes to the best of 7 unless Eric or Mark win 4
        for($i = 1; $i < 8; $i++){ 
            
                 
                 
                    //make associative array to interperet values
                 $rock_paper_choices = array( 
                                '1' => "Rock" ,   
                                '2' => "Paper",     
                                '3' => "Scissors" 
                                 );   
                 $Mark_Decision = array_rand($rock_paper_choices,1);
                 $Eric_Decision = array_rand($rock_paper_choices,1);
                 
                 echo "Game {$i}";
                 echo "<pre>";
            
            // if-elseif logic to determine the round_win and increase the persons score
            
             if($rock_paper_choices[$Mark_Decision] == "Rock" && $rock_paper_choices[$Eric_Decision] == "Scissors"){
                
                    $Mark_Score += 1;
                    $round_win = "Mark Wins [Mark = $Mark_Score Eric = $Eric_Score]". "\n";
            
            }
            
            elseif($rock_paper_choices[$Mark_Decision] == "Paper" && $rock_paper_choices[$Eric_Decision] == "Rock"){
               
                    $Mark_Score += 1;
                    $round_win = "Mark Wins [Mark = $Mark_Score Eric = $Eric_Score]" . "\n";
            }
            
            elseif($rock_paper_choices[$Mark_Decision] == "Scissors" && $rock_paper_choices[$Eric_Decision] == "Paper" ){
                
                    $Mark_Score += 1;
                    $round_win = "Mark Wins [Mark = $Mark_Score Eric = $Eric_Score]" . "\n";
            }
            
            elseif($rock_paper_choices[$Mark_Decision] == $rock_paper_choices[$Eric_Decision]){
                echo "Draw " . "\n";
            }
            
            // if Mark didnt win the round, the winner must be Eric
            
            else {
                $Eric_Score += 1;
                $round_win = "Eric Wins [Mark = $Mark_Score Eric = $Eric_Score]" . "\n";
            }
            
            
            // displays who chose what, the round_win message for who won, and checks if either score is 4 to win the game
            
            echo "Mark - " . $rock_paper_choices[$Mark_Decision] . "\n" . "<br />";
            
            echo "Eric - " . $rock_paper_choices[$Eric_Decision] . "\n" . "<br />";
            
            echo $round_win . "\n";
        
            if($Mark_Score == 4 || $Eric_Score == 4){
                $winner = true;
                break;
            }
            
        }
        
        // if no one won the game, make a new game and reset the scores
        
        if(!$winner){
             echo "New Game! <br />" . "<pre>";
             $Mark_Score = 0;
             $Eric_Score = 0;
             
        }
        // loop until someones score is 4
}       while(!$winner);
    
    
                /*
                Key:
            R = Rock
            P = Paper
            S = Scissors
            
            W = Win
            D = Draw
            L = Lose
            )
            
            R - R	=D
            R - P	=L
            R - S	=W
            P - R	=W
            P - P	=D
            P - S	=L
            S - R	=L
            S - P	=W
            S - S	=D
            */


    ?>
</p>
</body>
</html>