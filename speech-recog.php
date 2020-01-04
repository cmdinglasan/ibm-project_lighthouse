<?php include 'header.php'; ?>

<div class="site-wrapper">
	<div class="speech-recognition">
		<div class="container">
			<span>Text Recognition</span><br/>
			<span id="support">Empty</span><br/>

			<textarea placeholder="talk" id="transcrip"></textarea	>
			<button class="btn btn-primary" id="speechToText">Talk</button>
			<div class="content-transcript"></div>
			<div class="console"></div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>