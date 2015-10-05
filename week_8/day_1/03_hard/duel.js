/**
 * Andrew Jackson once killed attorney Charles Dickinson in a duel,
 * and we're going to use that to our advantage here to create 
 * a much less gruesome version of the duel on this webpage. 
 *
 * I mean if you want to make it gruesome maybe do that on your own time.
 *
 * Anyway, I have given you a basic HTML structure for a 
 * DUEL OF FORM BUTTONS between these two dead guys, and you
 * should make the page do what it needs to do, using your knowledge
 * of JS, HTML, CSS, and... gun dueling.
 *
 * Here's what this 'game' should do:
 * 
 * 1. Clicking a "FIRE" button should fire a shot at the other dueler.
 *   - shots have a random chance of succeeding or failing
 *   - number of shots fired should increase every click on the "FIRE" button
 *   - number of hits obviously only increases when the shot is successful
 *   - both duelers are invincible (for now!)
 * 
 * 2. Clicking the "RESET" button resets all the shot and hit counters and
 * adds 1 to the num resets
 *
 * 3. Any time you click any of the buttons on the page, change the background
 * color of the page to a completely random color. (Google will be your friend for
 * figuring out how to do that. The random color bit, that is.)
 *
 * OPTIONAL STUFF:
 * - add photos of the two duelers below their name (google search that stuff)
 * - play a sound when someone clicks the "FIRE" button. I added a "shot.wav" 
 *   so you can do this; you'll need to read about the <audio> element
 *   and how to use it in JS
 * - ???
 * - Profit!
 */
 var fireButtonAndrew = document.getElementById("andrew-shoot");
 var fireButtonCharles = document.getElementById("charles-shoot");
 var resetButton = document.getElementById("reset");
 
 var andrewNumShots = document.getElementById("andrew-numshots");
 var andrewNumHits = document.getElementById("andrew-numhits");
 
 var charlesNumShots = document.getElementById("charles-numshots");
 var charlesNumHits = document.getElementById("charles-numhits");
 

 var successfulShot;
 
function randomColor(randomColor){
      document.body.style.background =  "#" + (Math.random() * 0xFFFFFF<<0).toString(16);
       
}
 
 function randomShot(){
     
       var rand =  1 + Math.floor(Math.random() * 6);
       if(rand >= 3){
           successfulShot = false;
       }
       else {
           successfulShot = true;
           
       }
        document.getElementById("audio-shot").play();
 }
 


 

 function fireButton(fireButtonAndrew,fireButtonCharles){
   fireButtonAndrew.addEventListener("click",function(){
       randomShot();
       
       andrewNumShots.innerHTML = parseInt(andrewNumShots.innerHTML, 10) + 1;
       
       randomColor(this);
            if(successfulShot == true){
                andrewNumHits.innerHTML = parseInt(andrewNumHits.innerHTML, 10) + 1;
       }
   },false);
   
   fireButtonCharles.addEventListener("click",function(){
       randomShot();
    
       charlesNumShots.innerHTML = parseInt(charlesNumShots.innerHTML, 10) + 1;
       
       randomColor(this);
             if(successfulShot == true){
                 charlesNumHits.innerHTML = parseInt(charlesNumHits.innerHTML,10) + 1;
       }
   },false);
 }
 
 resetButton.onclick = function(){
    
        document.getElementById("charles-numhits").innerHTML = 0; 
        document.getElementById("charles-numshots").innerHTML = 0;
        document.getElementById("andrew-numshots").innerHTML = 0;
        document.getElementById("andrew-numhits").innerHTML = 0;
        document.getElementById("num-resets").innerHTML = parseInt(document.getElementById("num-resets").innerHTML,10) + 1;
        randomColor(this);
        
 };
     fireButton(fireButtonAndrew,fireButtonCharles);