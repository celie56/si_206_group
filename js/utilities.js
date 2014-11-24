
// path is the address of the html to be 
// swapped to in the content id
var ContentSwap = function(path){
    $.get("pages/" + path, function (data) {
		$("#content").html(data);
	});
}

var clickme = function(element){
    $path = element.innerHTML + ".html";
    console.log($path);
    ContentSwap($path);
}

$(".link").click(function(){
    $path = $(this).html() + ".html";
    ContentSwap($path);
});
