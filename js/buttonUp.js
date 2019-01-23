	$(document).ready(function() {
		$(window).on("scroll", function() {
			var odVrha = $(window).scrollTop();
			$("#topLink").toggleClass("down", (odVrha > 600));
		});
	});