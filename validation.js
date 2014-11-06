

var checkEmail = function(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('The two email addresses must match.');
	}
	else if(input.value == null) {
		input.setCustomValidity('Input your email');
	}
	else {
		// input is valid -- reset the error message
		input.setCustomValidity('');
	}
}

var checkAge = function(input) {
	if (input.value == null) {
		input.setCustomValidity('Input your age.');
	}
	else if (input.value < 0) {
		input.setCustomValidity('Please select an age above 0');
	}
	else {
		input.setCustomValidity('');
	}
}

var checkName = function(input) {
	if (input.value == '') {
		input.setCustomValidity('Please put in your name.');
	} 
}
