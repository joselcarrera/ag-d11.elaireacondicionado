$(document).ready(function() {
	
	// New message balloon

	if($("li.icon-pm .pm-count strong").text() === "0") {
		$("li.icon-pm .pm-count").hide();
	};
	if($("li.icon-notification .notification-count strong").text() === "0") {
		$("li.icon-notification .notification-count").hide();
	};

});