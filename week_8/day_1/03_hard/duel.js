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
 
 var ajFire = document.getElementById('andrew-shoot');
 var cdFire = document.getElementById('charles-shoot');
 var ajShots = document.getElementById('andrew-numshots');
 var ajHit = document.getElementById('andrew-numhits');
 var cdShots = document.getElementById('charles-numshots');
 var cdHit = document.getElementById('charles-numhits');
 var reset = document.getElementById('reset');
 var numResets = document.getElementById('num-resets');
 
 var genRandNum = function() {
    return Math.floor(Math.random() * (100 - 0 + 1)) + 0;
 };
 
 var bang = function() {
  
  var audio = document.createElement('audio');
  audio.src = 'shot.wav';
  audio.autoplay = true;
  document.body.appendChild(audio);
  
 };
 
 ajFire.onclick = function() {
     
    var hitOrMiss = genRandNum();
    
    ajShots.innerHTML = parseInt(ajShots.innerHTML, 10) + 1;
    
    bang();
    
    if(hitOrMiss <= 50) {
       ajHit.innerHTML = parseInt(ajHit.innerHTML, 10) + 1;
    }
 };
 
 cdFire.onclick = function() {
  
    var hitOrMiss = genRandNum();
    
    cdShots.innerHTML = parseInt(cdShots.innerHTML, 10) + 1;
    
    bang();
    
    if(hitOrMiss <= 50) {
       cdHit.innerHTML = parseInt(cdHit.innerHTML, 10) + 1;
    } 
 };
 
 reset.onclick = function() {
     ajShots.innerHTML = 0;
     ajHit.innerHTML = 0;
     cdShots.innerHTML = 0;
     cdHit.innerHTML = 0;
     numResets.innerHTML = parseInt(numResets.innerHTML, 10) + 1;
 };