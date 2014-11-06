// Because laziness
var getEl = function(id){
	return document.getElementById(id);
}

// default custom validation messages
getEl('i_name').setCustomValidity('Please fill out your name');
getEl('i_email').setCustomValidity('Please input your email');

var checkEmail = function(input) {
	// from http://www.w3schools.com/js/js_form_validation.asp
	var x = input.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		input.setCustomValidity("not an email address");
    }
	else{
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
var checkName = function(input){
	if (input.value){
		input.setCustomValidity('');
	}
}

var updateImage = function(input){
	var img = "pics/" + input.value + ".png";
	getEl("avatar_image").src=img;
}

var selectTheme = function(input){
	var theme = input.value + ".css";
	getEl('theme').href = theme;
}

