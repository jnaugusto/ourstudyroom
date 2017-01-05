importScripts('plugins/moment.min.js');
importScripts('plugins/moment-timezone.min.js');

onmessage = function(e) {
	// Start timer and send time callback
	var timeInterval = setInterval(function() {
		var timezone = e.data;
		postMessage(moment().tz(timezone).add(1, 'seconds').format());
	}, 1000);
}