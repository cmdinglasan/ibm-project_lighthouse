<?php include 'header.php'?>

<script>
$(document).ready(function() {
  text = 'Welcome to Project Lighthouse. Navigate through the website using the Tab and Shift + Tab keys';
    msg.text = text;
    speechSynthesis.speak(msg);
});
</script>

<div class="site-wrapper">
	<?php include 'search-bar.php'; ?>
	<div class="container">
		<section class="section courses-section" id="online-courses">
			<div class="section-title">
				<h2>Online Courses</h2>
			</div>
			<div class="section-wrapper">
				<div class="topics" id="topics">
					<div class="topic col-sm-6">
						<div class="topic-header" style="background: url(img/educational.jpg)">
							<h3>Academic</h3>
						</div>
						<div class="topic-contents">
							<ul class="subjects" alt="Academic Subjects">
								<li>
									<a href="courses/computing.php" alt="Computing Subject" class="collapsed">
										<span>Computing</span>
									</a>
									<ul class="child" id="computing-child">
										<li>
											<a href="courses/job/technical-skills.php" alt="Technical Skills Set Subject">
												<span>Technical Skills Set</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="courses/math.php" alt="Mathematics Subject">
										<span>Mathematics</span>
									</a>
								</li>
								<li>
									<a href="#" alt="Arts Subject">
										<span>Arts</span>
									</a>
								</li>
								<li>
									<a href="#" alt="Economics Subject">
										<span>Economics</span>
									</a>
								</li>
								<li>
									<a href="#" alt="Science and Engineering Subject">
										<span>Science and Engineering</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="topic col-sm-6">
						<div class="topic-header" style="background: url(img/social-inclusion.jpg)">
							<h3>Social Inclusion</h3>
						</div>
						<div class="topic-contents">
							<ul class="subjects" alt="Social Inclusion Subjects">
								<li>
									<a href="courses/advocacy.php" alt="Advocacy Subject">
										<span>Advocacy</span>
									</a>
								</li>
								<li>
									<a href="#" alt="Job Placement Subject" class="collapsed">
										<span>Job Placement</span>
									</a>
									<ul class="child" id="job-placement-child">
										<li>
											<a href="courses/job/technical-skills.php" alt="Technical Skills Set Subject">
												<span>Technical Skills Set</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php include 'footer.php'?>