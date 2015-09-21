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
function addImage(name) {
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
}
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}




setInterval(function() {
  if (getRandomInt(0,5) === 0)
  {
    addImage('2lnw.jpg');
  }
  else if (getRandomInt(0,5) === 1)
  {
    addImage('CKfEUPBUwAAVLLk.jpg');
  }
  else if (getRandomInt(0,5) === 2)
  {
    addImage('clipboard013.jpg');
  }
  else if (getRandomInt(0,5) === 3)
  {
    addImage('jackson.jpg');
  }
  else
  {
    addImage('washington.jpg');
  }
}, 2500);