// cookie function from stack overflow http://stackoverflow.com/questions/5968196/check-cookie-if-cookie-exists
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
} 

// End cookies


var UpdateHeaderAvatar = function(){
    var avatarCookie = readCookie("avatar");
	$('#user_avatar').attr('src', avatarCookie);
}

var UpdateAvatar = function(){
//$('#form_submit_button').click(function(){
	eraseCookie('avatar');
	$avatar = "pics/" + $('#character').val() + "_" + $('#color').val() + ".png";
	createCookie('avatar', $avatar, 365);
	UpdateHeaderAvatar();
}

var login = function(){
    var avatarCookie = readCookie("avatar");

    if (avatarCookie == null) {
        // do cookie doesn't exist stuff;
        createCookie("avatar", "pics/blank.PNG", 365);
        UpdateHeaderAvatar();
        if (confirm("This appears to be your first time at our site, please create an account.") == true) {
            ContentSwap("Form.html");
        }
    }
    else {
        // do cookie exists stuff
        UpdateHeaderAvatar();
    }
}
login();
