	$.ajax({

					type: "POST",
					url: "src/items.php",
					data: {},
					success : function(data) { 

						$("#bots-items-container").html(data);
						resetJs();

					},
					error : function(jqXHR, textStatus, errorThrown) {

						console.log(textStatus, errorThrown);

					}

	});