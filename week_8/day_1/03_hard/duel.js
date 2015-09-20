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
 
var andrewshoot = document.getElementById('andrew-shoot');
var charlesshoot = document.getElementById('charles-shoot');
var reset = document.getElementById('reset');
 
var andrewshots = document.getElementById('andrew-numshots').innerHTML;
var andrewhit = document.getElementById('andrew-numhits').innerHTML;
 
var charlesshots = document.getElementById('charles-numshots').innerHTML;
var charleshit = document.getElementById('charles-numhits').innerHTML;

var resets = document.getElementById('num-resets').innerHTML;
 
var values = localStorage;

values.setItem('andrewhit', andrewhit);
values.setItem('andrewshots', andrewshots);

values.setItem('charleshit', charleshit);
values.setItem('charlesshots', charlesshots);

values.setItem('resets', resets);

var headshot = new Audio('http://files.gamebanana.com/preview/sounds/ep9_-_doug_-_boom_headshot.mp3');
var shot = new Audio('http://www.sa-matra.net/sounds/starwars/ATST-ChinGuns.wav');
var wow = new Audio('http://soundboard.panictank.net/wow%20;).mp3');


function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.round(Math.random() * 15)];
        }
        return color;
    }

window.onload = document.body.style.backgroundColor = getRandomColor();
 
 andrewshoot.onclick = function () {
    var rand = Math.floor(Math.random() * ((2 - 1) - 0 + 1)) + 0;
        var number = parseInt(values.getItem('andrewshots'), 10) + 1;
        values.setItem('andrewshots', number);
        document.getElementById('andrew-numshots').innerHTML = values.getItem('andrewshots');
        
        document.body.style.backgroundColor = getRandomColor();
        shot.play();
        
    if(rand == 1){
        var hits = parseInt(values.getItem('andrewhit'), 10) + 1;
        values.setItem('andrewhit', hits);
        document.getElementById('andrew-numhits').innerHTML = values.getItem('andrewhit');
        window.setTimeout(function(){
        headshot.play();
        }, 1000);
    }
 };
 
 charlesshoot.onclick = function () {
    var rand = Math.floor(Math.random() * ((2 - 1) - 0 + 1)) + 0;
    var number = parseInt(values.getItem('charlesshots'), 10) + 1;
    values.setItem('charlesshots', number);
    document.getElementById('charles-numshots').innerHTML = values.getItem('charlesshots'); 
    
    document.body.style.backgroundColor = getRandomColor();
    shot.play();
    
    if(rand == 1){
        var hits = parseInt(values.getItem('charleshit'), 10) + 1;
        values.setItem('charleshit', hits);
        document.getElementById('charles-numhits').innerHTML = values.getItem('charleshit');
        window.setTimeout(function(){
        headshot.play();
        }, 1000);
    }
 };
 
 reset.onclick = function () {
    var number = parseInt(values.getItem('resets'), 10) + 1;
    values.setItem('resets', number);
    document.getElementById('num-resets').innerHTML = values.getItem('resets');
    
    document.body.style.backgroundColor = getRandomColor();
    wow.play();
    
    values.setItem('andrewhit', 0);
    document.getElementById('andrew-numhits').innerHTML = 0;
    
    values.setItem('andrewshots', 0);
    document.getElementById('andrew-numshots').innerHTML = 0;

    values.setItem('charleshit', 0);
    document.getElementById('charles-numhits').innerHTML = 0;
    values.setItem('charlesshots', 0);
    document.getElementById('charles-numshots').innerHTML = 0;
 };
