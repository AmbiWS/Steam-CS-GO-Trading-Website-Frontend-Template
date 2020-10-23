$("#dropdown-menu-bots").on("click", "a", function(e) {
	e.preventDefault();
	$("#botsDropdownMenuButton").html("SORT: " + $(this).text());
	
	var st = "";
	
	switch ($(this).text()) {
			
		case "HIGHEST PRICE":
			st = "hp";
			break;
			
		case "LOWEST PRICE":
			st = "lp";
			break;
			
		case "HIGHEST FLOAT":
			st = "hf";
			break;
			
		case "LOWEST FLOAT":
			st = "lf";
			break;
			
		default:
			break;
	}
	
	resetBotsTakenItemsWindow();
	triggerWait();
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {stype:st},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			
			visibleItemsCount = 0;
			itemsQuantityPerStack = 30;
	
			for (var i = visibleItemsCount; i < itemsQuantityPerStack; i++) {

				$("#bots-items-container").children().eq(i).removeClass("hidden");

			}
	
			visibleItemsCount += 30;
			itemsQuantityPerStack += 30;
			
			var head = document.getElementsByTagName('head')[0];
      var script = document.createElement('script');
      script.src = 'src/js/idr.js';
      head.appendChild(script);
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});

});