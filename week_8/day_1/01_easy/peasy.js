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

var myImgs = ["2lnw.jpg","CKfEUPBUwAAVLLk.jpg","clipboard013.jpg","jackson.jpg","washington.jpg"];

var randPic = function(array) {
    
     return function() {
        var i = Math.floor(Math.random() * (myImgs.length - 0 + 1)) + 0;
        var imgToDisplay = array[i];
        return imgToDisplay;
     };
};

var oneImg = randPic(myImgs);

//function getRandomInt(min, max) {
//        return Math.floor(Math.random() * (max - min + 1)) + min;
//    }
    
//var randKey = getRandomInt(0, myImgs.length - 1);

//var randImg = myImgs[randKey];

function addImage(name) {
  var img = document.createElement('img');
  img.src = name;
  document.getElementById('image-box').appendChild(img);
}

//addImage(randImg);

var imgTimer = setInterval(function () {
    var display = oneImg();
    if (!display) {
        clearInterval(imgTimer);
    } else {
    addImage(display);
    }
}, 2500);