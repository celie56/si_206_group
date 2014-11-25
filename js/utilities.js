
// path is the address of the html to be 
// swapped to in the content id
var ContentSwap = function(path){
    $.get("pages/" + path, function (data) {
		$("#content").html(data);
	});
}

// event listener to see when something with the
// link class is clicked
$(".link").click(function(){
    $path = $(this).html() + ".html";
    ContentSwap($path);
});
