init();
var list = [];
var awesomplete;

function init() {
	load_data();
	smooth_scrolling();
}

function load_data() {
	$.ajax({
		url: 'load_data.php',
		success: load_data_finished
	});
}

function load_data_finished(msg) {
	obj = jQuery.parseJSON(msg);

	$.each(obj, function(key, value) {
		insert_tab(key);
		insert_data(key, value);
	});

	$('#nav-tabs li').first().addClass('active');
	$('#tab-content ul').first().addClass('active');

	awesomplete = new Awesomplete(document.getElementById('search-box'), {
		list: list,
		minChars: 0,
		sort: true,
		maxItems: list.length
	});
}

function insert_tab(tab) {
	$('#nav-tabs').append('<li role="presentation"><a id="interviewee-tab-' + tab + '" href="#' + tab + '" aria-controls="' + tab + '" role="tab" data-toggle="tab">' + tab + '</a></li>');
}

function insert_data(major, data) {
	text = '<ul id="' + major + '"class="tab-pane" role="tabpanel">';
	$.each(data, function(index, value) {
		text += '<li class="row"><div class="col-xs-2 interviewRef">' + value.interviewRef + '</div>';
		text += ' <div class="col-xs-10 fullname"><span class="firstname">' + $.trim(value.firstName) + '</span> <span class="lastname">' + $.trim(value.lastName) + '</span></div></li>';

		list.push({ label: $.trim(value.firstName) + ' ' + $.trim(value.lastName), value: value.major });
	});
	text += '</ul>';

	$('#tab-content').append(text);
}

function smooth_scrolling() {
	$(".menu li a").on('click', function(event) {
    	if (this.hash !== "") {
      		event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function() {
				window.location.hash = hash;
			});
    	}
  	});
}