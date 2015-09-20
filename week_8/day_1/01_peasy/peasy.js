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
 var images = [
  '2lnw.jpg', 
  'CKfEUPBUwAAVLLk.jpg',
  'clipboard013.jpg',
  'jackson.jpg',
  'washington.jpg'
  ];
 
function addImage(name) {
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
}

function randomPic(){
  window.setTimeout(function(){
    var rand = Math.floor(Math.random() * ((images.length - 1) - 0 + 1)) + 0;
    addImage(images[rand]);
    randomPic();
  },2500);
}


randomPic();