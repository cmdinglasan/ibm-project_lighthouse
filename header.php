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
	<script src="js/speech_synthesis.js"></script>
	<script src="js/speech_recog.js"></script>
	<script src="js/genscripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

	<!-- General -->
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="fonts/font.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/lighthouse_app_icon.png" type="image/png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<!-- Icons -->
	<script src="https://kit.fontawesome.com/614c79ec05.js" crossorigin="anonymous"></script>

	<!-- Cookies -->
	<script src="js/js.cookie.min.js"></script>
	<script src="js/cookies.js"></script>
</head>
<body>

<?php include 'welcome.php' ?>

<div class="accessibility-menu" id="accessibility">
	<div class="container">
		<div class="access-left-pane">
			<div class="jumpto">
				<span alt="Jump to">Jump to</span>
			</div>
			<div class="access-sections">
				<div class="access-section page-section">
					<a href="#" class="access-btn" data-toggle="collapse" data-target="page-section-selection" alt="Sections of this page Menu">
						<span>Sections of this page</span>
						<i class="fas fa-caret-down"></i>
					</a>
					<ul class="access-selection shadow-sm collapse" id="page-section-selection">
						<li>
							<a href="#main-header" id="header-access">
								<span>Main Header</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="access-section menu-section">
					<a href="#" class="access-btn" data-toggle="collapse" data-target="menu-section-selection">
						<span>Website Menus</span>
						<i class="fas fa-caret-down"></i>
					</a>
					<ul class="access-selection shadow-sm collapse" id="menu-section-selection">
						<li>
							<a href="index.php" id="course-access">
								<span>Online Courses</span>
							</a>
						</li>
						<li>
							<a href="online-braille.php" id="braille-access">
								<span>Online Braille</span>
							</a>
						</li>
						<li>
							<a href="image-audio.php" id="image-access">
								<span>Image to Audio Converter</span>
							</a>
						</li>
						<li>
							<a href="speech-recog.php" id="recog-access">
								<span>Speech Recognition Tool</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main-header shadow-sm" id="main-header">
	<a href="#" class="close-menu">
		<i class="fas fa-times"></i>
	</a>
	<div class="main-logo" id="logo">
		<a href="/">
			<span class="light">Project</span><span class="dark">Lighthouse</span>
		</a>
	</div>
	<div class="option" id="darkMdOption">
			<span class="label">Dark Mode</span>
			<input type="checkbox" name="darkmode" hidden/>
			<a href="#">
				<div class="option-mark shadow-sm" id="dark-md"></div>
			</a>
	</div>
	<div class="main-nav" id="navMenu">
		<ul class="menu">
			<div class="nav-title">Menu</div>
			<li>
				<a href="index.php" alt="Online Courses (link)">
					<img src="img/course.svg" class="svg"/>
					<span>Online Courses</span>
				</a>
			</li>
		</ul>
		<ul class="menu">
			<div class="nav-title">Tools</div>
			<li>
				<a href="online-braille.php" alt="Online Braille (link)">
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