$("#bots-items-container").on('click', '.csgo-item-adv', function() {
	
			var tempstr = "";

			if ($(this).find('.csgo-st').html() == "ST") {

				tempstr = " csgo-item-st-border";

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

			var html = $(this).parent().html();
			$(this).parent().addClass("hidden");
			$("#bots-offerbox-hint").addClass("hidden");

			$("#bots-offerbox-items").html($("#bots-offerbox-items").html() + "<div class=\"csgo-item" + tempstr + "\">"  		+ html + "</div>");

			var head = document.getElementsByTagName('head')[0];
			var script = document.createElement('script');
			script.src = 'src/js/idr.js';
			head.appendChild(script);

		var price = $(this).find('.bottom-price').text();
		price = price.substring(0, price.length - 1);
		price = price.replace(/\s/g, '');

		userbal = userbal - price;

		$("#balSymbol").html("-");
		$("#balVal").html((0 - userbal).toFixed(2));

		$("#balSymbol").css("color", "red");
		$("#balVal").css("color", "red");
		$("#balSign").css("color", "red");
	
});

$("#bots-offerbox-items").on('click', '.csgo-item-adv', function() {
	
			var tempstr = "";

			if ($(this).find('.csgo-st').html() == "ST") {

				tempstr = " csgo-item-st-border";

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

			var html = $(this).parent().html();
			$(this).parent().addClass("hidden");

			$("#bots-items-container").html("<div class=\"csgo-item" + tempstr + "\">"  		+ html + "</div>" + $("#bots-items-container").html());

			var head = document.getElementsByTagName('head')[0];
			var script = document.createElement('script');
			script.src = 'src/js/idr.js';
			head.appendChild(script);

		var price = $(this).find('.bottom-price').text();
		price = price.substring(0, price.length - 1);
		price = price.replace(/\s/g, '');

		userbal = +userbal + +price;

		if (userbal >= -0.02) {
			
			$("#balSymbol").html("+");
			$("#balVal").html(0);

			$("#balSymbol").css("color", "white");
			$("#balVal").css("color", "white");
			$("#balSign").css("color", "white");
			$("#bots-offerbox-hint").removeClass("hidden");
			
		} else {
			
			$("#balSymbol").html("-");
			$("#balVal").html((0 - userbal).toFixed(2));

			$("#balSymbol").css("color", "red");
			$("#balVal").css("color", "red");
			$("#balSign").css("color", "red");
			
		}
	
});