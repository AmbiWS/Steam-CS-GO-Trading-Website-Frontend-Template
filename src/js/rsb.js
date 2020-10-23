$("#refresh-bots").on("click", function() {
	
	resetBotsTakenItemsWindow();
	triggerWait();
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"rr"},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
});