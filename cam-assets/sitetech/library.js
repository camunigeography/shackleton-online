// Javascript function library

// Attach events
//addEvent(window, 'load', setFocus);


// Reusable event attacher - see http://www.onlinetools.org/articles/unobtrusivejavascript/chapter4.html
function addEvent(obj, evType, fn){ 
  if (obj.addEventListener){ 
    obj.addEventListener(evType, fn, false); 
    return true;
  } else if (obj.attachEvent){ 
    var r = obj.attachEvent("on"+evType, fn); 
    return r; 
  } else { 
    return false; 
  } 
}

// Set the cursor focus to the first form item
// From: http://javascript.internet.com/forms/form-focus.html
// With modifications in response to newsgroup posting
function setFocus() {
  if (document.forms.length > 0) {
    // choose the first form on the page
    x=0;
    //if the name is minisearch then try the next one
    for (x=0; (document.forms[x] && (document.forms[x].name == "minisearch" || document.forms[x].name == "jumplist" || document.forms[x].name == "nofocus" || document.forms[x].name == "formnofocus" || document.forms[x].name == "f")) ; x++) {
      // if there isnt another one rechoose the first form
//      if (document.forms.length < 2) {
//        x=0;
//      }
      //x++;
    }
    if (document.forms[x]) {
      var field = document.forms[x];
      for (i = 0; i < field.length; i++) {
        if ((field.elements[i].type == "text") || (field.elements[i].type == "email") || (field.elements[i].type == "textarea") || (field.elements[i].type.toString().charAt(0) == "s")) {
          document.forms[x].elements[i].focus();
          break;
        }
      }
    }
  }
}

// Original version
function setFocusOriginal() {
  if (document.forms.length > 0) {
    var field = document.forms[0];
    for (i = 0; i < field.length; i++) {
      if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type.toString().charAt(0) == "s")) {
        document.forms[0].elements[i].focus();
        break;
      }
    }
  }
}