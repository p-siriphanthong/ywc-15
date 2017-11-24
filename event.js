$('#nav-tabs').on('click', 'li a', function() {
	$('.tab-content li').removeClass('focus');
});

$('#search-box').focus(function() {
	if(awesomplete.ul.childNodes.length === 0) {
		awesomplete.evaluate();
	}
	awesomplete.open();
});

$('#search-box').focusout(function() {
	awesomplete.close();
});

document.getElementById('search-box').addEventListener('awesomplete-selectcomplete', (event) => {
	obj = event.text;
	item = $('#' + obj.value + ' li:contains("' + obj.label + '")').first();

	$('#search-box').val('');
	$('#search-box').blur();
	$('#interviewee-tab-' + obj.value).click();
	$('.tab-content li').removeClass('focus');
	$('.search-page .awesomplete ul').html('');

	item.addClass('focus');
	if(item.position().top < $(window).height() - 100) {
		$('#menu-interviewee').click();
	}
	else if(item.position().top + $('#interviewee').position().top + $(window).height() < $('#interviewee').position().top + $('#interviewee').height()) {
		$('html, body').animate({ scrollTop: item.position().top + $('#interviewee').position().top }, 800);
	}
	else {
		$('html, body').animate({ scrollTop: $('#interviewee').height() }, 800);
	}
});