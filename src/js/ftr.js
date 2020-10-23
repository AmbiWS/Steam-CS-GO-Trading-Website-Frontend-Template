window.addEventListener("load", function() {

    var browserHeight = $(window).height();
    var btContentPos = $("#footer-content").position().top;

    if (browserHeight > btContentPos) {

    	var marginForBt = Math.ceil(browserHeight) - Math.floor(btContentPos);
    	$("#footer-content").css("margin-top", marginForBt + "px");

    }

});