<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Young Webmaster Camp 15 | YWC#15</title>
	<link rel="shortcut icon" type="image/png" href="./images/logo-background.png?ver=<?php echo filemtime('images/logo-background.png'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./libraries/awesomplete.css?ver=<?php echo filemtime('libraries/awesomplete.css'); ?>">
	<link rel="stylesheet" href="./index.css?ver=<?php echo filemtime('index.css'); ?>">
</head>
<body data-spy="scroll" data-target=".menu">

	<nav class="menu navbar-fixed-top">
  		<ul class="nav">
    		<li><a id="menu-search" href="#search"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></a></li>
    		<li><a id="menu-interviewee" href="#interviewee"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></a></li>
    		<li><a id="menu-homework" href="#homework"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
    		<li><a id="menu-briefcase" href="#briefcase"><i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i></a></li>
    		<li><a id="menu-travel" href="#travel"><i class="fa fa-car" aria-hidden="true"></i></a></li>
    		<li><a id="menu-contact" href="#contact"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></a></li>
    	</ul>
	</nav>

	<!-- search page -->
	<div id="search" class="page search-page">
		<div class="page-content">
			<img src="images/logo.png" alt="ywc logo">
			<h1>ประกาศผู้มีสิทธิ์เข้าสัมภาษณ์</h1>
			<h4>การสัมภาษณ์จะจัดขึ้นในวันที่ 26 พฤศจิกายน 2560 ณ อาคาร ซี.พี.ทาวเวอร์ 1 (สีลม)</h4>
			<input id="search-box" class="search-box" placeholder="ค้นหารายชื่อผู้มีสิทธ์เข้าสัมภาษณ์">
		</div>
	</div>

	<!-- interviewee page -->
	<div id="interviewee" class="page interviewee-page">
		<div class="page-content">
			<ul id="nav-tabs" class="nav nav-pills" role="tablist"></ul>
			<div id="tab-content" class="tab-content"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="./libraries/awesomplete.min.js?ver=<?php echo filemtime('libraries/awesomplete.min.js'); ?>"></script>
	<script src="./main.js?ver=<?php echo filemtime('main.js'); ?>"></script>
	<script src="./event.js?ver=<?php echo filemtime('event.js'); ?>"></script>
</body>
</html>