/**
 * Use setTimeout to add a random image to the page every 2.5 seconds.
 * Use the addImage function to add an image.
 *
 * To point you in the right direction: check out
 * the getRandomInt function on this page:
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
 * 
 */


/**
 * this function adds an image to the page
 * @param {String} name an image filename
 */
 
// this function gets a random number
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

// adds a random image to the page
function addImage(name) {
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
}

// an array of images
var image_array = [
    'washington.jpg',
    '2lnw.jpg',
    'clipboard013.jpg',
    'jackson.jpg',
    'CKfEUPBUwAAVLLk.jpg'
  ];

// function inside a function
function delayedPicture() {
  // this function repeats based on the time we give it
  window.setTimeout(function() {
    // uses the random number we got and the image array's length to determine 
    // which random picture to use
    var int = getRandomInt(0, image_array.length);
    // uses the addImage function
    addImage(image_array[int]);
    delayedPicture();
    // 2500 stands for the time between displaying each picture on the screen
  }, 2500);
}

// calling the function
delayedPicture();