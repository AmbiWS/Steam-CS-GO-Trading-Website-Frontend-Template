var visibleItemsCount = 0;
var itemsQuantityPerStack = 30;

for (var i = visibleItemsCount; i < itemsQuantityPerStack; i++) {
	
	$("#bots-items-container").children().eq(i).removeClass("hidden");
	
}

visibleItemsCount += 30;
itemsQuantityPerStack += 30;

$("#bots-items-container").scroll( function() {
	
	if ($("#bots-items-container").scrollTop() + $("#bots-items-container").innerHeight() > $("#bots-items-container")[0].scrollHeight - 10) {
		
		for (var i = visibleItemsCount; i < itemsQuantityPerStack; i++) {
			
			$("#bots-items-container").children().eq(i).removeClass("hidden");
			
		}
		
		visibleItemsCount += 30;
		itemsQuantityPerStack += 30;
		
	}
	
});