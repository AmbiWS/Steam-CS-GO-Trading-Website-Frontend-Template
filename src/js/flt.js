$("#search-input-bots").keyup(function() {
	
	resetBotsTakenItemsWindow();
	triggerWait();
	var keyword = $("#search-input-bots").val();
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"pf", kw:keyword},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
});

$("#priceTo").on('keyup' ,function() {
	
	priceFilter($("#priceFrom").val(), $("#priceTo").val());
	
});

$("#priceFrom").on('keyup' ,function() {
	
	priceFilter($("#priceFrom").val(), $("#priceTo").val());
	
});

pSLider.on('change', function() {
	
	priceFilter($("#priceFrom").val(), $("#priceTo").val());
	
});

function priceFilter(from, to) {
	
	if (from > to) {
		
		var tmp = from;
		from = to;
		to = tmp;
		
	}
	
	resetBotsTakenItemsWindow();
	triggerWait();
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"ps", pf:from, pt:to},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
}

$("#stattrakToggle").change(function() {
	
	resetBotsTakenItemsWindow();
	triggerWait();
	var bool = $(this).prop('checked');
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"sttm", b:bool},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
});

$("#botLockToggle").change(function() {
	
	resetBotsTakenItemsWindow();
	triggerWait();
	var bool = $(this).prop('checked');
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"bl", b:bool},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
});

$("#stickersToggle").change(function() {
	
	resetBotsTakenItemsWindow();
	triggerWait();
	var bool = $(this).prop('checked');
	
	$.ajax({
		
		type: "POST",
		url: "src/items.php",
		data: {t:"stick", b:bool},
		success : function(data) { 
			
    	$('#bots-items-container').html(data);
			resetJs();
			
    },
		error : function(jqXHR, textStatus, errorThrown) {
    	console.log(textStatus, errorThrown);
    }
		
	});
	
});

function resetJs() {
	
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
	
}

function resetBotsTakenItemsWindow() {
	
	$("#bots-offerbox-body").html('<div id="bots-offerbox-items"><div id="bots-offerbox-hint"><span><p>SELECT THE ITEMS YOU WANT</p></span><span><p>TO BUY FROM BOTS INVENTORY</p></span><p><img class="transhint" src="./src/img/arrow.png" height="26px" width="26px"></p></div></div>');
	
	$("#balSymbol").html("+");
	$("#balVal").html(0);

	$("#balSymbol").css("color", "white");
	$("#balVal").css("color", "white");
	$("#balSign").css("color", "white");
	
}

function triggerWait() {
	
	$("#bots-items-container").html('<div id="waitDiv">Loading items<div id="wCloak"><img id="waitCloak" src="./src/img/load.png" height="32px" width="32px"></div></div>');
	
}