<?php include 'header.php'; ?>

<div class="main-content">
	<div class="container">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			  	<?php include 'home.php'; ?>
			</div>
			<div class="tab-pane fade" id="braille" role="tabpanel" aria-labelledby="braille-tab">
			  	<?php include 'braille.php'; ?>
			</div>
			<div class="tab-pane fade" id="convert" role="tabpanel" aria-labelledby="convert-tab">
			  	<?php include 'convert.php'; ?>
			</div>
			<div class="tab-pane fade" id="recognition" role="tabpanel" aria-labelledby="recognition-tab">
			  	<?php include 'recognition.php'; ?>
			</div>
			<div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
			  	<?php include 'courses.php'; ?>
			</div>
			<div class="tab-pane fade" id="access" role="tabpanel" aria-labelledby="access-tab">
			  	<?php include 'access.php'; ?>
		 	</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>