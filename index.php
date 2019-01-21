<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/landing.css">
	<link rel="stylesheet" type="text/css" href="styles/loader.css">
	<link rel="stylesheet" type="text/css" href="styles/navigation.css">
	<link rel="stylesheet" type="text/css" href="styles/map.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
</head>
<body>
	<canvas id="floaterCanvas"></canvas>
	<section id="social-icons-fixed-panel" class="social-icons-fixed">
		<ul class="social-container fixed">
			<li class="social"><img src="assets/linkedin.png" alt="linkedin"></li>
			<li class="social"><img src="assets/twitter.png" alt="twitter"></li>
			<li class="social"><img src="assets/yt.png" alt="youtube"></li>
			<li class="social"><img src="assets/fb.png" alt="facebook"></li>
			<li class="social"><img src="assets/insta.png" alt="instagram"></li>
		</ul>
	</section>
	<section id="landing-section">
		<div id="loader-overlay" class="active">
		</div>
		<div class="bg-wheel large sit-in tiny">
			<img src="assets/inner_orange.png" style="animation-duration: 40s;" alt="wheel" class="wheel reverse">
		</div>
		<div class="bg-wheel larger">
			<img src="assets/outer_orange.png" style="animation-duration: 60s;" alt="wheel" class="wheel">
		</div>
		<div class="bg-wheel small sit-in tiny">
			<img src="assets/green.png" style="animation-duration: 20s;" alt="wheel" class="wheel">
		</div>
		<div class="bg-wheel medium sit-in tiny">
			<img src="assets/green.png" style="animation-duration: 20s;" alt="wheel" class="wheel">
			<div class="headers fade-in inactive">
				<span class="college-header">national institute of technology agartala</span>
				<span class="fest-header">moksha</span>
				<span class="version-header">VI</span>
			</div>
			<div class="timer fade-in inactive">
				<div class="days">
					30
				</div>
				<div class="separator">
					:
				</div>
				<div class="hours">
					30
				</div>
				<div class="separator">
					:
				</div>
				<div class="minutes">
					30
				</div>
				<div class="separator">
					:
				</div>
				<div class="seconds">
					30
				</div>
			</div>
		</div>
		<div class="bg-wheel smaller sit-in fade-in inactive" style="transition: opacity 6s ease-out;" id="logo-fade">
			<img src="assets/logo.svg" alt="logo" class="logo">
		</div>
		<span id="down-arrow" class="arrow-pointer down">
			<span class="text"></span>
		</span>
		<span id="up-arrow" class="arrow-pointer up">
			<span class="text"></span>
		</span>
	</section>
	<section id="menu">
		<div class="menu-items-container">
			<a href="pages/sponsors.html"><div class="menu-item" data-order="7"><span>Sponsors</span></div></a>
			<a href="pages/events.html"><div class="menu-item" data-order="0"><span>Events</span></div></a>
			<a href="pages/experience.html"><div class="menu-item" data-order="1"><span>Experience</span></div></a>
			<a href="index.php"><div class="menu-item" data-order="3"><span>Home</span></div></a>
			<a href="pages/locate.html"><div class="menu-item" data-order="4"><span>Locate Us</span></div></a>
			<a href="pages/schedule.html"><div class="menu-item" data-order="5"><span>Schedule</span></div></a>
			<a href="pages/team.html"><div class="menu-item" data-order="2"><span>Our Team</span></div></a>
			<a href="pages/promo.html"><div class="menu-item" data-order="6"><span>Social &amp; Promotion</span></div></a>
		</div>
	</section>
	<section id="map-section">
		<div id="map">
			<?php echo file_get_contents('assets/india.svg'); ?>
		</div>
		<div class="displaybox">
			<div class="general-content">
				<div id="incredible-india-logo">
					<img src="assets/incredible-india-logo.png">
				</div>
			</div>
			<div id="state-content" class="state-content">
				<a href="#" id="closeStateDescriptionBtn"></a>
			</div>
		</div>
	</section>
	<section id="topnav">
			<ul class="left">
				<li class="logo"><img src="assets/logo.svg" alt="logo"></li>
				<li class="header">
					<span class="fest-header" style="display: inline; font-size: 32pt;">
						moksha<span class="version-header" style="display: inline; font-size: 26pt; transform: translateX(-10px);">VI</span>
					</span>
				</li>
				<li class="banner">
					<img src="assets/banner.png" alt="banner">
				</li>
			</ul>
			<ul class="social-container center">
				<li class="social"><img src="assets/linkedin.png" alt="linkedin"></li>
				<li class="social"><img src="assets/twitter.png" alt="twitter"></li>
				<li class="social"><img src="assets/yt.png" alt="youtube"></li>
				<li class="social"><img src="assets/fb.png" alt="facebook"></li>
				<li class="social"><img src="assets/insta.png" alt="instagram"></li>
			</ul>
			<ul class="right">
				<li class="hamburger-container">
					<a href="#" id="menubtn" class="hamburger">
				        <div class="hamburger__bar"></div>
					</a>
				</li>
			</ul>
	</section>

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript">
		$("html").on("DOMMouseScroll mousewheel mousemove keydown", false); //disable all events
	</script>
	<script type="text/javascript" src="scripts/pageswitch.js"></script>
	<script type="text/javascript" src="scripts/landing.js"></script>
	<script type="text/javascript" src="scripts/navigation.js"></script>
	<script type="text/javascript" src="scripts/map.js"></script>
	<script type="text/javascript" src="scripts/floaters.js"></script>
	<script type="text/javascript" src="scripts/menu.js"></script>
	<script type="text/javascript" src="scripts/loader.js"></script>
</body>
</html>