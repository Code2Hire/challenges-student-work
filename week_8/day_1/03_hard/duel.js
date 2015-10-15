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
 //random number, giving a 50% chance for hit, used later in shot chance function
 var chance = function (){
     var num = Math.random()*100;
     if (num < 50){
         return true;
     }
 }
 
 //buttons
 var ashoot = document.getElementById('andrew-shoot');
 var cshoot = document.getElementById('charles-shoot');
 //hits
 var ashots = document.getElementById('andrew-numhits');
 var cshots = document.getElementById('charles-numhits');
 //total shots
 var atotal = document.getElementById('andrew-numshots');
 var ctotal = document.getElementById('charles-numshots');
 
 var reset = document.getElementById('reset');
 var resetnum = document.getElementById('num-resets');
 ashoot.addEventListener('click',function(){
    var totalshots = parseInt(atotal.innerHTML, 10);  
    atotal.innerHTML = totalshots+1;
    
    if(chance()){
       var totalhits = parseInt(ashots.innerHTML, 10);
       ashots.innerHTML =totalhits+1;
    }
 });
 
  cshoot.addEventListener('click',function(){
    var totalshots = parseInt(ctotal.innerHTML, 10);  
    ctotal.innerHTML = totalshots+1;
    
    if(chance()){
       var totalhits = parseInt(cshots.innerHTML, 10);
       cshots.innerHTML =totalhits+1;
    }
 });
 
 reset.addEventListener('click',function(){
    atotal.innerHTML = 0;
    ashots.innerHTML = 0;
    ctotal.innerHTML = 0;
    cshots.innerHTML = 0;
    
    var resetnums = parseInt(resetnum.innerHTML, 10);
    resetnum.innerHTML = resetnums+1;
    
 });
 
 
 