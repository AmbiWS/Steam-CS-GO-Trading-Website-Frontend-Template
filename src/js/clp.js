var userbal = 0;
var walletCoef = 1;
var walletSign = "$";

var currCoef = parseFloat(getCookie("cf"));

if (currCoef != null) {
	
	if (currCoef < 1) {
		
		$("#balSign").html("€");
		$("#ddNavbar").html("CURRENCY: " + "<span class=\"lead-color\">" + "EUR (€)" + "</span>")
		
	} else if (currCoef > 1) {
		
		$("#balSign").html("₽");
		$("#ddNavbar").html("CURRENCY: " + "<span class=\"lead-color\">" + "RUB (₽)" + "</span>")
		
	}
	
}

$("#walletDropdown").on('click', 'a', function(e) {
	
	e.preventDefault();
	$("#ddNavbar").html("CURRENCY: " + "<span class=\"lead-color\">" + $(this).text() + "</span>");
	
	if ($(this).text().includes("EUR")) {
		
		walletCoef = 0.91;
		walletSign = "€";
		$("#balSign").html("€");
		
	} else if ($(this).text().includes("RUB")) {
		
		walletCoef = 63.55;
		walletSign = "₽";
		$("#balSign").html("₽");
		
	} else {
		
		$("#balSign").html("$");
		walletCoef = 1;
		walletSign = "$";
		
	}
	
	setCookie("cf", walletCoef, 365);
	setCookie("sg", walletSign, 365);
	$("#refresh-bots").click();
	
});

function setCookie(name, value, days) {
    var expires = "";
	
    if (days) {
			
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
			
    }
	
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
	
    for(var i = 0; i < ca.length; i++) {
			
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			
    }
	
    return null;
}