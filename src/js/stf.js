/*	SetUp your Database and uncomment this section after

		window.setInterval(function() {

		var ch1 = Math.floor((Math.random() * 10) + 1);

		if (ch1 <= 3) {

			$.ajax({

				type: "POST",
				url: "src/stat.php",
				data: {updst:"tt"},
				success : function(data) { 

					$("#trades-data").html((parseInt($("#trades-data").html().replace(/ /g,'')) + 1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
					highlightUpd($("#trades-data"), "#0074D9");

				},
				error : function(jqXHR, textStatus, errorThrown) {

					console.log(textStatus, errorThrown);

				}

			});

		}

	}, 30000);

	window.setInterval(function() {

		var ch2 = Math.floor((Math.random() * 10) + 1);

		if (ch2 <= 2) {

			$.ajax({

				type: "POST",
				url: "src/stat.php",
				data: {updst:"tu"},
				success : function(data) { 

					$("#r-users-data").html((parseInt($("#r-users-data").html().replace(/ /g,'')) + 1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
					highlightUpd($("#r-users-data"), "#0074D9");

				},
				error : function(jqXHR, textStatus, errorThrown) {

					console.log(textStatus, errorThrown);

				}

			});

		}

	}, 37500);

	window.setInterval(function() {

		var ch3 = Math.floor((Math.random() * 3) + 1);
		var ch4 = Math.floor((Math.random() * 2) + 1);
		var co = parseInt($("#o-users-data").html());

		if (ch4 == 1) {

			co = co - ch3;

		} else {

			co = co + ch3;

		}

		if (co < 100) {

			co = co + (ch3 * 2);

		} else if (co > 150) {

			co = co - (ch3 * 2);

		}

		$.ajax({

				type: "POST",
				url: "src/stat.php",
				data: {updst:co},
				success : function(data) { 

					$("#o-users-data").html(co);
					highlightUpd($("#o-users-data"), "#0074D9");

				},
				error : function(jqXHR, textStatus, errorThrown) {

					console.log(textStatus, errorThrown);

				}

			});

	}, 30000);*/

function highlightUpd(elem, clr) {
	
	elem.animate({
		
		color: clr
		
	}, 300);
	
	elem.stop(true, true).delay(300).animate({
			
			color: "#F0F8FF"
			
	}, 300);
	
}