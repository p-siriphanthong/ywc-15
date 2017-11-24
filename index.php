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
			<img src="./images/logo.png?ver=<?php echo filemtime('images/logo.png'); ?>" alt="ywc logo">
			<h1>ประกาศผู้มีสิทธิ์เข้าสัมภาษณ์</h1>
			<h4>การสัมภาษณ์จะจัดขึ้นในวันที่ 26 พฤศจิกายน 2560 ณ อาคาร ซี.พี.ทาวเวอร์ 1 (สีลม)</h4>
			<input id="search-box" class="search-box" placeholder="ค้นหารายชื่อผู้มีสิทธ์เข้าสัมภาษณ์">
		</div>
	</div>

	<!-- interviewee page -->
	<div id="interviewee" class="page interviewee-page">
		<div class="page-content">
			<h1 class="topic">รายชื่อผู้มีสิทธิ์เข้าสัมภาษณ์</h1>
			<ul id="nav-tabs" class="nav nav-pills" role="tablist"></ul>
			<div id="tab-content" class="tab-content"></div>
		</div>
	</div>

	<!-- homework page -->
	<div id="homework" class="page homework-page">
		<div class="page-content">
			<h1 class="topic">การบ้านสำหรับผู้มีสิทธิ์เข้าสัมภาษณ์</h1>
			<div class="row equal-height">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 homework">
					<div class="homework-content">
						<h2>สาขาคอนเทนท์</h2>
						<img src="./images/content.png?ver=<?php echo filemtime('images/content.png'); ?>">
						<div class="detail">
							<p>ให้น้อง ๆ เลือกทำคอนเทนต์ใด คอนเทนต์หนึ่งจาก 2 หัวข้อด้านล่าง โดยต้องทำเป็นคอนเทนต์ออกมาจริงเท่านั้น ไม่จำกัดรูปแบบการนำเสนอ</p>
							<p><strong>หัวข้อที่ให้เลือก</strong></p>
							<ol>
								<li>คอนเทนต์ที่ทำให้ผู้ใช้ Social เข้าใจ Cyberbullying และตระหนักถึงปัญหาที่เกิดขึ้นจาก Cyberbullying</li>
								<li>คอนเทนต์ที่ทำให้คนไทยเปลี่ยนพฤติกรรมเสพติดหน้าจอ เสพติด Social หันมาพูดคุยกัน เจอหน้ากันในชีวิตจริง ๆ มากกว่าที่เป็นอยู่</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 homework">
					<div class="homework-content">
						<h2>สาขาดีไซน์</h2>
						<img src="./images/design.png?ver=<?php echo filemtime('images/design.png'); ?>">
						<div class="detail">
							<p>ให้ผู้ผ่านเข้ารอบสัมภาษณ์ออกแบบเว็บไซต์ของ <strong>"คณะรักษาความสงบแห่งชาติ หรือ คสช."</strong> เพื่อเป็นสื่อกลางในการประชาสัมพันธ์นโยบายต่าง ๆ และเป็นสื่อกลางระหว่างประชาชนกับคณะรักษาความสงบแห่งชาติ โดยให้ออกแบบในลักษณะของ One Page Design Website</p>
							<p>** สำหรับผู้ผ่านเข้ารอบสัมภาษณ์คนใดทำ CSS มา คณะกรรมการจะพิจารณาเป็นพิเศษ</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 homework">
					<div class="homework-content">
						<h2>สาขามาร์เก็ตติ้ง</h2>
						<img src="./images/marketing.png?ver=<?php echo filemtime('images/marketing.png'); ?>">
						<div class="detail">
							<p>ให้ทำแผนการตลาด (Marketing Plan) สำหรับเว็บไซต์หนึ่งเว็บไซต์ โดยเลือกเว็บไซต์ใด ๆ ก็ได้ ทั้งเว็บไซต์ของไทยและเว็บไซต์ของต่างประเทศ</p>
							<p>นำเสนอในรูปแบบพรีเซนเทชั่น <strong>ไม่เกิน 10 หน้า ภายในเวลา 5 นาที</strong></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 homework">
					<div class="homework-content">
						<h2>สาขาโปรแกรมมิ่ง</h2>
						<img src="./images/programming.png?ver=<?php echo filemtime('images/programming.png'); ?>">
						<div class="detail">
							<p>ให้เขียน <strong>เว็บไซต์ประกาศผลผู้ผ่านเข้ารอบสัมภาษณ์ของ YWC#15</strong> โดยใช้ข้อมูลจาก API โดยมี Feature ดังนี้</p>
							<ul>
								<li>ดึงข้อมูลจาก API โดยตรง</li>
								<li>ให้แสดงผลแยกแต่ละสาขา</li>
								<li>มีระบบค้นหาชื่อผ่านกล่อง Search</li>
								<li>ความสามารถหรือ Feature พิเศษอื่น ๆ ที่มี</li>
							</ul>
							<p>ความแตกต่าง และแสดงความสามารถของน้องออกมาให้ได้มากที่สุด</p>
							<p>เมื่อทำเสร็จแล้วให้ Push Source Code ขึ้น GitHub ก่อนเวลาสัมภาษณ์</p>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="./libraries/awesomplete.min.js?ver=<?php echo filemtime('libraries/awesomplete.min.js'); ?>"></script>
	<script src="./main.js?ver=<?php echo filemtime('main.js'); ?>"></script>
	<script src="./event.js?ver=<?php echo filemtime('event.js'); ?>"></script>
</body>
</html>