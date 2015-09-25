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
 var imageInterval;
 var imagesArray = ["2lnw.jpg", "Cats.jpg", "dolphin.jpg", "jackson.jpg", "washington.jpg"];
function addImage(name) {
  
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
 
}
 function randomImage(){
    imageInterval = window.setInterval(function(){
    var num = Math.floor(Math.random() * (imagesArray.length+1));
    addImage(imagesArray[num]);
    },2500);
  }
  

  
document.body.onload = randomImage();