<!-- 
	Using everything you have learned and some googling

  Imagine this is a post page and they have sent you a number
  you want to return them the number it text format. For instance:
    
    - 1 -> one
    - 2 -> two

  but anything that is above 10 we want to return "Nothing is greater than 10"
 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        
        
        <!----Html object that are given id's to use in javascript---->
        
        
        <p id="textchange"> This is the Where the Text will appear</p>
        
        <button id="buttonclick"> Click Here!</button>
      
      
        <!----Html object that are given id's to use in javascript---->
        
      
        <script type="text/javascript">
            
           // creating text changing variable and a button/eventlistener
            var Text = document.getElementById("textchange");
            
            var button = document.getElementById("buttonclick");
           

            button.addEventListener('click',challengeTask, false); 
             
              function challengeTask(){
                
              // Using javascript to generate a random number  
               var number = Math.floor((Math.random() * 20) + 1);

                // case statement takes number and drops it through the cases
                 switch(number){
                  case 0:
                  Text.textContent = "The Number is: zero";
                    break;
                  case 1:
                  Text.textContent = "The Number is: one";
                    break;
                  case 2:
                    Text.textContent =  "The Number is: two";
                    break;
                  case 3:
                    Text.textContent =  "The Number is: Three";
                    break;
                  case 4:
                    Text.textContent =  "The Number is: four";
                    break;
                  case 5:
                    Text.textContent = "The Number is: five";
                    break;
                  case 6:
                    Text.textContent = "The Number is: six";
                    break;
                  case 7:
                    Text.textContent =  "The Number is: seven";
                    break;
                  case 8:
                    Text.textContent = "Number is: eight";
                    break;
                  case 9:
                    Text.textContent = "The Number is: nine";
                    break;
                  case 10:
                  case 11:
                  case 12:
                  case 13:
                  case 14:
                  case 15:
                  case 16:
                  case 17:
                  case 18:
                  case 19:
                  case 20:
                    Text.textContent = "There is nothing greater then ten";
                    break;
                  }
                }  	
          
        </script>
        
	</body>
</html>