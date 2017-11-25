load_comment();
var comments;
var timer;

function load_comment() {
	$.ajax({
		url: 'm/load_comment.php',
		success: load_comment_finished
	});
}

function load_comment_finished(msg) {
	comments = jQuery.parseJSON(msg);

	if(!timer) {
		$('#cloud').jQCloud(comments, {
			autoResize: true,
			colors: ['#702003', '#ff8d30', '#aa3105', '#e2ab06', '#a83c15', '#e5bf34', '#c12903'],
			fontSize: {
				from: 0.028,
				to: 0.015
			}
		});

		timer = setInterval(update_cloud, 5000);
	}
}

function update_cloud() {
	$.each(comments, function(index, value) {
		comments[index].weight = Math.floor((Math.random() * 10) + 1);
	});

	$('#cloud').jQCloud('update', comments);
}

$('#comment-form').submit(function() {
	if((text = $('#comment-box').val()) !== '') {
		data = {};
		data['comment'] = text;
		$('#comment-box').val('');

		$.ajax({
			url: 'm/insert_comment.php',
			type: 'GET',
			data: data,
			success: load_comment
		});
	}
 	return false;
});