<!DOCTYPE html>
<html>
<head>
	<title>Lighthouse</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Mousebind -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.js"></script>

	<script src="js/genscripts.js"></script>
	<script src="js/speech_recog.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

	<!-- General -->
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="fonts/font.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Icons -->
	<script src="https://kit.fontawesome.com/614c79ec05.js" crossorigin="anonymous"></script>


</head>
<body>
	<div class="speech-recognition-box">
		<div class="container">
			<div class="speech-status">
				<i class="fas fa-microphone"></i>
				<span id="speech-status"></span>
			</div>
			<div class="speech-result">
				<span id="speech-result"></span>
			</div>
		</div>
	</div>
	<div class="main-header shadow-sm" role="tablist">
		<div class="container">
			<nav class="main-navigation">
				<ul class="nav nav-pills nav-fill justify-content-center">
					<li class="nav-item">
						<a title="Go to Homepage" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" data-title="">
							<span>Home</span>
						</a>
					</li>
					<li class="nav-item">
						<a title="Go to Online Braille" class="nav-link" id="braille-tab" data-toggle="tab" href="#braille" role="tab" aria-controls="braille" aria-selected="false" data-title="1. Online Braille">
							<span>Online Braille</span>
						</a>
					</li>
					<li class="nav-item">
						<a title="Go to Image to text to Audio Converter" class="nav-link" id="convert-tab" data-toggle="tab" href="#convert" role="tab" aria-controls="convert" aria-selected="false" data-title="2. Image to Audio Converter">
							<span>Image to Audio</span>
						</a>
					</li>
					<li class="nav-item">
						<a title="Go to Speech Recognition" class="nav-link" id="recognition-tab" data-toggle="tab" href="#recognition" role="tab" aria-controls="recognition" aria-selected="false" data-title="3. Speech Recognition">
							<span>Speech Recognition</span>
						</a>
					</li>
					<li class="nav-item">
						<a title="Go to Training Courses" class="nav-link" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false" data-title="4. Training Courses">
							<span>Training Courses</span>
						</a>
					</li>
					<li class="nav-item">
						<a title="Access other Sites" class="nav-link" id="access-tab" data-toggle="tab" href="#access" role="tab" aria-controls="access" aria-selected="false" data-title="5. Access other Sites">
							<span>Access other Sites</span>
						</a>
					</li>
				</ul>
				<div id="incFont" class="btn-md">
					<i class="fas fa-plus"></i>
				</div>
				<div id="decFont" class="btn-md">
					<i class="fas fa-minus"></i>
				</div>
				<div id="screenCon" class="btn-md">
					<i class="fas fa-sun"></i>
				</div>
				<div id="speakMic" class="btn-md">
					<i class="fas fa-microphone"></i>
				</div>
			</nav>
		</div>
	</div>