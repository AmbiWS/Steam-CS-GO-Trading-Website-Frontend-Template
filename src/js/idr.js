$(".csgo-sticker").on('mouseenter', function() {
	
	var curIdx = $(this).index();
	
	switch (curIdx) {
			
		case 0:
			$(this).find(".tooltiptext").css({left: "-0px"});
			break;
			
		case 1:
			$(this).find(".tooltiptext").css({left: "-0px"});
			break;
	
		case 2:
			$(this).find(".tooltiptext").css({left: "-0px"});
			break;
			
		case 3:
			$(this).find(".tooltiptext").css({left: "-0px"});
			break;
			
	}
	
});

$('.csgo-item-adv').on('mouseenter', function() {
	
		if ($(this).find('.csgo-st').html() == "ST") {
			
			$(this).css("border", "1px orange solid");
			$(this).parent().css("border", "none");
			
		}
		
		$(this).css("height", "300px");
		$(this).css("width", "220px");
		$(this).css("background-color", "rgba(22, 22, 22, 1)");
		$(this).css("float", "left");
		$(this).css("margin-right", "15px");
		$(this).css("margin-bottom", "15px");
		$(this).css("position", "relative");
		$(this).css("z-index", "10");
		
		$(this).find('.csgo-lock').css("width", "42px");
		$(this).find('.csgo-lock').css("height", "25px");
		$(this).find('.csgo-st').css("width", "42px");
		$(this).find('.csgo-st').css("height", "25px");
		$(this).find('.csgo-quality').css("width", "42px");
		$(this).find('.csgo-quality').css("height", "25px");
		
		$(this).find('.csgo-adv-price').css("width", "70px");
		$(this).find('.csgo-adv-price').css("height", "25px");
		$(this).find('.csgo-adv-price').css("margin-left", "15px");
		
		$(this).find('.csgo-itemtimelock').removeClass("hidden");
		$(this).find('.csgo-itemfloat').removeClass("hidden");
		$(this).find('.csgo-itemname').removeClass("hidden");
		$(this).find('.csgo-itembotid').removeClass("hidden");
		$(this).find('.csgo-stickercontainer').removeClass("hidden");
		$(this).find('.csgo-adv-price').removeClass("hidden");
		$(this).find('.bottom-price').addClass("hidden");
		
		$(this).find('.bottom-price').css("width", "50%");
		
		$(this).find('.csgo-adv-price').html($(this).find('.bottom-price').html());
		
		$(this).find('.csgo-itemname').css("font-size", "60%");
		$(this).find('.csgo-itemfloat').css("font-size", "60%");
		$(this).find('.csgo-itembotid').css("font-size", "60%");
		$(this).find('.csgo-itemtimelock').css("font-size", "60%");
		
		var currPos = $(this).position();
		var parPosEdge = $(this).parent().parent().position().left + $(this).parent().parent().width();
		
		if ((currPos.left + $(this).width()) > parPosEdge) {
			
			var offset = $(this).width() - $(this).parent().width();
			$(this).css({left: -offset});
			
		}
		
		var maxHeight = $(this).find("div:last").position().top + $(this).find("div:last").height() + 5;
		$(this).css("height", maxHeight);

	}).on('mouseleave', function() {
	
	if ($(this).find('.csgo-st').html() == "ST") {
			
			$(this).parent().css("border", "1px orange solid");
			
		}
		
		$(this).css("height", "143px");
		$(this).css("width", "128px");
		$(this).css("background-color", "transparent");
		$(this).css("float", "left");
		$(this).css("margin-right", "15px");
		$(this).css("margin-bottom", "15px");
		$(this).css("position", "static");
		$(this).css("z-index", "1");
		
		$(this).find('.csgo-lock').css("width", "42px");
		$(this).find('.csgo-lock').css("height", "20px");
		$(this).find('.csgo-st').css("width", "42px");
		$(this).find('.csgo-st').css("height", "20px");
		$(this).find('.csgo-quality').css("width", "42px");
		$(this).find('.csgo-quality').css("height", "20px");
		
		$(this).find('.csgo-adv-price').css("width", "1px");
		$(this).find('.csgo-adv-price').css("height", "1px");
		$(this).find('.csgo-adv-price').css("margin-left", "0px");
		
		$(this).find('.csgo-itemname').addClass("hidden");
		$(this).find('.csgo-itemfloat').addClass("hidden");
		$(this).find('.csgo-itembotid').addClass("hidden");
		$(this).find('.csgo-itemtimelock').addClass("hidden");
		$(this).find('.csgo-stickercontainer').addClass("hidden");
		$(this).find('.csgo-adv-price').addClass("hidden");
		$(this).find('.bottom-price').removeClass("hidden");
		
		$(this).css("border", "none");
		
		$(this).find('.bottom-price').css("width", "65%");
	
});