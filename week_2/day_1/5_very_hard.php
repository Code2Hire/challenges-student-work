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
   $game = ['Rock', 'Paper', 'Scissors'];
   $player1choice = $game[rand(0,count($game)-1)];
   $player2choice = $game[rand(0,count($game)-1)];
   echo $player1choice, " - ", $player2choice;
   
   if($player1choice = "Rock"){
       
       if($player2choice = "Paper"){
           echo "<br/>" . "Player two wins";
       }
       else{
           echo "Player one wins";
       }
   }
   
      if($player1choice = "Rock"){
       
       if($player2choice = "Paper"){
           echo "<br/>" . "Player two wins";
       }
       else{
           echo "Player one wins";
       }
   }
   
      if($player1choice = "Rock"){
       
       if($player2choice = "Paper"){
           echo "<br/>" . "Player two wins";
       }
       else{
           echo "Player one wins";
       }
   }
    ?>
</p>
</body>
</html>