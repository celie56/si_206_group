
// path is the address of the html to be 
// swapped to in the content id
var ContentSwap = function(path){
    $.get("pages/" + path, function (data) {
		$("#content").html(data);
	});
}

$(".link").click(function(){
    $path = $(this).html() + ".html";
    ContentSwap($path);
});
