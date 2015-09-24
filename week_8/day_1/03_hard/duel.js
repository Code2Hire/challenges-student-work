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



function rand() { 
    var num = Math.floor((Math.random() * 10) + 1);
    return num;
} 


//functions taken from internet to create hexadecimal, I was thinking of doing different predetermined background colors assigened to a number and then randomizing to get said number, but i tought this gave me a wider range of background styles.
function rg(m, n) {
    return Math.floor( Math.random() * (n - m + 1) ) + m;
}

function hex(i) {
    return i.toString(16);
}

function randColor() {
    return '#' + hex(rg(1, 15)) + hex(rg(1, 15)) + hex(rg(1, 15)) +
        hex(rg(1, 15)) + hex(rg(1, 15)) + hex(rg(1, 15));
}

var jacksonButton = document.getElementById('andrew-shoot');
var charlesButton = document.getElementById('charles-shoot');
var resetButton = document.getElementById('reset');

var jacksonHits = document.getElementById('andrew-numhits');
var charlesHits = document.getElementById('charles-numhits');
var jacksonHitsInt = parseInt(jacksonHits.innerHTML, 10);
var charlesHitsInt = parseInt(charlesHits.innerHTML, 10);


var jacksonShots = document.getElementById('andrew-numshots');
var jacksonShotsInt = parseInt(jacksonShots.innerHTML, 10);

var charlesShots = document.getElementById('charles-numshots');
var charlesShotsInt = parseInt(charlesShots.innerHTML, 10);
/* I tried putting my jquery stiff here, I'm still alittle confused on 
how it works, for some reason the console would tell me that jquery was undefined
when I did it like this, but when I put on html under the sript tags, it worked fine
Am i doing it worong here? I understand jQuery is a framework of javascript, so it should be allowed right?
It's just a little confusing on how to use jquery, when to use it, and how to define properly

jQuery(function ($) {
    $(document).ready(function(){
            $("button").click(function(){
            $("body").css("background-color", randColor());
        });
    });
});   
*/
jacksonButton.addEventListener('click', function() {
    jacksonShots.innerHTML = jacksonShotsInt++;
    if (rand() > 5) { 
        jacksonHits.innerHTML = jacksonHitsInt++;
    } 
});

charlesButton.addEventListener('click', function() { 
    charlesShots.innerHTML = charlesShotsInt++;
    if  (rand() > 5) { 
        charlesHits.innerHTML = charlesHitsInt++;
    } 
});

resetButton.addEventListener('click', function() { 
    document.getElementById("andrew-numshots").innerHTML = 0; 
    document.getElementById("andrew-numhits").innerHTML = 0; 
    document.getElementById("charles-numshots").innerHTML = 0; 
    document.getElementById("charles-numhits").innerHTML = 0; 
    
    //give the actual variable an actual value of 0 not just display zero as done above^^
    jacksonShotsInt = 0;
    charlesShotsInt = 0;

   
var resetButtonCount = document.getElementById('num-resets'); 
    resetButtonCount.innerHTML = parseInt(resetButtonCount.innerHTML, 10) + 1;
}); 


