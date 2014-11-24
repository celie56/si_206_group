// cookie function from stack overflow http://stackoverflow.com/questions/5968196/check-cookie-if-cookie-exists
var setCookie = function(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

var getCookie = function(name){
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
			end = dc.length;
        }
    }
    return unescape(dc.substring(begin + prefix.length, end));
} 

var login = function(){
    var userCookie = getCookie("login");

    if (userCookie == null) {
        // do cookie doesn't exist stuff;
		alert ("please log in");
		setCookie("login", "chris", 365);
    }
    else {
        // do cookie exists stuff
		document.getElementById("WelcomeText").innerHTML = "hello " + userCookie;
    }
}
login();
