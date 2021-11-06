function ValidateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    document.login.username.focus();
    return true;
  } else {
    alert("You have entered an invalid email address!");
    document.login.username.focus();
    return false; 
  }
}

function ValidatePassword(inputText) {
  if (inputText.value.length >= 6) {
    alert("Valid password!");
    document.login.password.focus();
    return true;
  } else {
    alert("Your password length must above 6 characters!");
    document.login.password.focus();
    return false; 
  }
}

