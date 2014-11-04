

function checkEmail(input) {
  if (input.value != document.getElementById('email_addr').value) {
    input.setCustomValidity('The two email addresses must match.');
  } else {
    // input is valid -- reset the error message
    input.setCustomValidity('');
  }

  else if(input.value == null) {
    input.setCustomValidity('Input your email');
}




function checkAge(input) {
  if (input.value == null) {
    input.setCustomValidity('Input your age.');
  } else {
    // input is valid -- reset the error message
    input.setCustomValidity('');
  }
}



function checkName(input) {
  if (input.value == null) {
    input.setCustomValidity('Input your age.');
  } 

  // else {
  //   // input is valid -- reset the error message
  //   input.setCustomValidity('');
  // }
}