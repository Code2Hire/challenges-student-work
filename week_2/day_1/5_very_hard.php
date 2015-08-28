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

    $player1 = 0;
    $player2 = 0;
    $round = 0;
    $player1wins = 0;
    $player2wins = 0;
    $numDraws = 0;
    $player1Played = '';
    $player2Played = '';
             
     // array of the game moves
        $move = array( 
                    '1' => "Rock" ,   // rock 1
                    '2' => "Paper",   // paper 2   
                    '3' => "scissors" // scissors 3
                     );                           
                                
            // while player 1 has less than 3 wins and player 2 has less than 3 wins or rounds is under 7
            while( ($player1wins < 3 && $player2wins < 3 ) || $round < 7 ){
    
                // player flicks wrist
                $player1 = rand(1,3);
                $player2 = rand(1,3);
                $round++;
                
                
            // check to see who is winning based on moves    
                
                if ($player1 == $player2) {
                    $numDraws++;
                } else {
                    
                    if ($player1 == 1) {   // if player 1 wins else player 2 wins
                    
                        if($player2 == 3) {
                            $player1wins++;
                        } else {
                            $player2wins++;
                        }
                        
                    } elseif ($player1 == 2) { 
                        
                      if($player2 == 1){
                          $player1wins++;
                      } else {
                          $player2wins++;
                      }
                        
                    } else {
                        if($player2 == 2 ){  // if player 2 wins 
                            $player1wins++;
                        } else {
                            $player2wins++;
                        }
                    }
                    
                }
                
                $player1Played = $move["$player1"];
                $player2Played = $move["$player2"];
                
                //outputs game stats
                echo "Game $round <br>";
                echo "Player 1 played $player1Played <br />";
                echo "Player 2 played $player2Played <br />";
                echo "Player 1: $player1wins, Player 2: $player2wins <br />";
                echo "<hr/>";
                
            }
                 

                         
    ?>
</p>
</body>
</html>