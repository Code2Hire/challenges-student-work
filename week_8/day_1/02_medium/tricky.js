/**
 * Using the LocalStorage API, save the contents of the text box
 * when users click the "save" button. 
 * Load the saved text when users click the "Load" button.
 *
 * Here's the documentation you need:
 * https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage
 */

var saveButton = document.getElementById('save-button');
var loadButton = document.getElementById('load-button');
var myStorage = localStorage;


/**
 * Gets the text from the element for you
 * @return {String}
 */

function getText() {
  return document.getElementById('save-me').value;
}

/**
 * Puts different text
 * @param {String} text the stuff you want to put in the box
 */
function setText(text) {
  return document.getElementById('save-me').value = text;
}

// adds a click event which uses the getText function
saveButton.addEventListener('click', function() { 
  myStorage.setItem('text', getText());
});

// adds a click event which loads the saved text from local storage
loadButton.addEventListener('click', function() { 
  setText(myStorage.getItem('text'));
});