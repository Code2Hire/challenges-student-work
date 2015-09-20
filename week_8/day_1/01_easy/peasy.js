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
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function addImage(name) {
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
}

var image_array = [
    'washington.jpg',
    '2lnw.jpg',
    'clipboard013.jpg',
    'jackson.jpg',
    'CKfEUPBUwAAVLLk.jpg'
  ];

function delayedPicture() {
  window.setTimeout(function() {
    var int = getRandomInt(0, image_array.length);
    addImage(image_array[int]);
    delayedPicture();
  }, 2500)
  
}

delayedPicture();