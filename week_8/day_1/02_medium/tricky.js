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
 
 
 var chance = function() {
     var numb = Math.random() * 100;
     if (numb > 50) {
         return true;
     } 
 }
 
 console.log(chance());
 var jackButton = document.getElementById('andrew-shoot');
 var dickButton = document.getElementById('charles-shoot');
 
 var jackHits = document.getElementById('andrew-numhits');
 var jacknumHits = parseInt(jackHits.innerHTML, 10);
 
 var dickHits = document.getElementById('charles-numhits');
 var dicknumHits = parseInt(dickHits.innerHTML, 10);
 
 var jackShots = document.getElementById('andrew-numshots');
 var jackNum = parseInt(jackShots.innerHTML, 10);
 
 var dickShots = document.getElementById('charles-numshots');
 var dickNum = parseInt(dickShots.innerHTML, 10);
 
 var yoMamaButt = document.getElementById('reset')
 var yoMama = document.getElementById('num-resets');
 var yomamaNum = parseInt(yoMama.innerHTML, 10);
 
 yoMamaButt.addEventListener('click', function() {
    yoMama.innerHTML = yomamaNum++;
 });
 
 jackButton.addEventListener('click', function() {
     jackShots.innerHTML = jackNum++;
     if(chance() === true) {
        jackHits.innerHTML = jacknumHits++;
     }
 });
 
 dickButton.addEventListener('click', function() {
    dickShots.innerHTML = dickNum++; 
    if(chance() === true) {
        dickHits.innerHTML = dicknumHits++;
    }
 });