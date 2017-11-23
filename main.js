init();

function init() {
	load_data();
}

function load_data() {
	$.ajax({
		url: 'load_data.php',
		success: load_data_finished
	});
}

function load_data_finished(msg) {
	obj = jQuery.parseJSON(msg);
	console.log(obj);
}