

function check(input) {
  if (input.value != document.getElementById('email_addr').value) {
    input.setCustomValidity('The two email addresses must match.');
  } else {
    // input is valid -- reset the error message
    input.setCustomValidity('');
  }
}


