<!Doctype html>
<?php $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'].'/ibm'; ?>
<head>
	<title>Project Lighthouse</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Mousebind -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.js"></script>

	<script src="js/genscripts.js"></script>
	<script src="js/speech_synthesis.js"></script>
	<script src="js/speech_recog.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

	<!-- General -->
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="fonts/font.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/lighthouse_app_icon.png" type="image/png"/>

	<!-- Icons -->
	<script src="https://kit.fontawesome.com/614c79ec05.js" crossorigin="anonymous"></script>

	<!-- Cookies -->
	<script src="js/js.cookie.min.js"></script>
	<script src="js/cookies.js"></script>
</head>
<body>

<?php include 'welcome.php' ?>

<div class="main-header shadow-sm">
	<div class="main-logo">
		<a href="/ibm">
			<span class="light">Project</span><span class="dark">Lighthouse</span>
		</a>
	</div>
	<div class="option">
			<span class="label">Dark Mode</span>
			<input type="checkbox" name="darkmode" hidden/>
			<a href="#">
				<div class="option-mark shadow-sm" id="dark-md"></div>
			</a>
	</div>
	<div class="main-nav">
		<ul class="menu">
			<div class="nav-title">Menu</div>
			<li>
				<a href="course.php">
					<img src="img/course.svg" class="svg"/>
					<span>Online Courses</span>
				</a>
			</li>
		</ul>
		<ul class="menu">
			<div class="nav-title">Tools</div>
			<li>
				<a href="online-braille.php">
					<img src="img/braille.svg" class="svg"/>
					<span>Online Braille</span>
				</a>
			</li>
			<li>
				<a href="image-audio.php">
					<img src="img/picture.svg" class="svg"/>
					<span>Image to Audio</span>
				</a>
			</li>
			<li>
				<a href="speech-recog.php">
					<img src="img/speech.svg" class="svg"/>
					<span>Speech Recognition</span>
				</a>
			</li>
		</ul>
	</div>
</div>