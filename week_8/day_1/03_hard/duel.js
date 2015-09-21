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
 //buttons
var andrewshoot = document.getElementById('andrew-shoot');
var charlesshoot = document.getElementById('charles-shoot');
var reset = document.getElementById('reset');
 
 //counters
var andrewshots = document.getElementById('andrew-numshots').innerHTML;
var andrewhit = document.getElementById('andrew-numhits').innerHTML;
 
var charlesshots = document.getElementById('charles-numshots').innerHTML;
var charleshit = document.getElementById('charles-numhits').innerHTML;

var resets = document.getElementById('num-resets').innerHTML;
 
 //storage items
var values = localStorage;

values.setItem('andrewhit', andrewhit);
values.setItem('andrewshots', andrewshots);

values.setItem('charleshit', charleshit);
values.setItem('charlesshots', charlesshots);

values.setItem('resets', resets);

//sound files
var headshot = new Audio('http://files.gamebanana.com/preview/sounds/ep9_-_doug_-_boom_headshot.mp3');
var shot = new Audio('http://www.sa-matra.net/sounds/starwars/ATST-ChinGuns.wav');
var wow = new Audio('http://soundboard.panictank.net/wow%20;).mp3');

//gives me a random color
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
}
window.onload = document.body.style.backgroundColor = getRandomColor();

//functions to decrease typing 
//does stuff for the buttons if clicked
function theClick(value, element, sound){
    var number = parseInt(values.getItem(value), 10) + 1;
    values.setItem(value, number);
    document.getElementById(element).innerHTML = values.getItem(value);
    document.body.style.backgroundColor = getRandomColor();
}

//if hit for extra picutres
function hitTimeout(image){
    document.getElementById(image).style.display = '';
    window.setTimeout(function(){
            headshot.play();
        }, 1000);
        
        window.setTimeout(function(){
            document.getElementById(image).style.display = 'none';
        }, 2200);
}

//resets values
 function rSet(value, element){
     values.setItem(value, 0);
    document.getElementById(element).innerHTML = 0;
 }
 
 //andrew jackson button click
 andrewshoot.onclick = function () {
    theClick('andrewshots', 'andrew-numshots');
    shot.play();
    
    var rand = Math.floor(Math.random() * ((2 - 1) - 0 + 1)) + 0;
    //the random probability of the shot hitting the target
    if(rand == 1){
        theClick('andrewhit', 'andrew-numhits');
        
        hitTimeout('andrew-bam');
    }
 };
 
 //charles dickenson button click
 charlesshoot.onclick = function () {
    theClick('charlesshots', 'charles-numshots');
    shot.play();
    
    var rand = Math.floor(Math.random() * ((2 - 1) - 0 + 1)) + 0;
    //the random probability of the shot hitting the target
    if(rand == 1){
        theClick('charleshit', 'charles-numhits');
        hitTimeout('charles-bam');
    }
 };
 
 //reset button click
 reset.onclick = function () {
    theClick('resets', 'num-resets');
    wow.play();
    
    rSet('andrewhit', 'andrew-numhits');
    rSet('andrewshots', 'andrew-numshots');
    rSet('charleshit', 'charles-numhits');
    rSet('charlesshots', 'charles-numshots');
 };
